<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\services;
use App\herramientas;
use App\equipo;
use App\logoequipos;
use App\Carrusel;
use App\Categoria;
use App\Producto;
use App\colores;
use App\Blog_desc;
use App\ProductosPhoto;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeccionController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

			$seccion = Seccion::all();
            
			foreach ($seccion as $sec) {
				$sec->elements = $sec->elementos()->count();  
			}
          
			return view('configs.secciones.index',compact('seccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function adddatosuser(Request $request)
    {
        $user = null;
        if (auth()->check()) {
            $user = auth()->user();
        }
        $vacante = Producto::where('id', $request->id_vacante)->first();
        $campo = $request->input();
        $files = $request->file(); // Obtener todos los archivos del request
        $pedidoor = 'post_'.Str::random(17);

        foreach ($files as $fieldName => $file) {
            if (!empty($file)) { // Verificar si el archivo actual no es nulo
                $extension = $file->getClientOriginalExtension();
                $namefile = Str::random(30) . '.' . $extension;
        
                // Guardar el archivo en el almacenamiento local
                $file->move(public_path('/img/photos/vacantes/'), $namefile);
        
                // Crear un nuevo objeto Blog_desc y asignar los valores
                $new = new Blog_desc;
                $new->imagen = $namefile;
                $new->idBlog = $fieldName; // Asignar el nombre del campo como ID, ¿es esto correcto?
                $new->contenido = $pedidoor;
                if (!$new->save()) {
                    \Toastr::error('Error al guardar campo');
                    return redirect()->back();
                }
            }
        }

        foreach ($campo as $c => $v) {
            if (is_numeric($c)) {
                $new = new Blog_desc;
                $nombre = $c;
                $new->texto = $v;
                $new->idBlog = $nombre;
                $new->contenido = $pedidoor;
    
                if (!$new->save()) {
                    \Toastr::error('Error al guardar campo');
                    return redirect()->back();
                }
            }
        }


        $pedido = new Pedido;
        $pedido->estatus = 1;
        $pedido->guia = $user->id;
        $pedido->uid = $pedidoor;
        $pedido->data = $vacante;

        if($pedido->save()){
            \Toastr::success('Campo guardado exitosamente');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar campo');
            return redirect()->back();
        }
        
    }
    
    

    public function agregarcampo(Request $request){
        $campo = new services;
        $campo->icono = $request->idProd;

        if(empty($request->opciones_cate)){
            \Toastr::error('Revise la cateforia del campo');
            return redirect()->back();
        }

        $campo->descripcion = $request->opciones_cate;

        if (!empty($request->nomCam)){
            $campo->titulo = $request->nomCam;
        }else{
            \Toastr::error('Revise el nombre del campo');
            return redirect()->back();
        }

        if($request->opciones == 3){
            $campo->inicio = 3;
        }elseif ($request->opciones == 2){
            $campo->inicio = 2;
        }elseif ($request->opciones == 1){
            $campo->inicio = 1;
        }else{
            \Toastr::error('Revise el tipo de campo');
            return redirect()->back();
        }
        
        if($campo->save()){
            \Toastr::success('Campo guardado exitosamente');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar campo');
            return redirect()->back();
        }
    }

    public function sucursalCreate(Request $request){

        $sucursal = new services;

        $sucursal->icono = $request->iframe;
        $sucursal->descripcion = $request->descripcion;

        if($sucursal->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al crear sucursal');
            return redirect()->back();
        }


    }

    public function sucursalDelete(Request $request){
        $id_suc = $request->id_suc;

        $sucursal = services::find($id_suc);

        if($sucursal->delete()){
            \Toastr::success('Eliminado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al Eliminar sucursal');
            return redirect()->back();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show($seccion) {
            $carrusel = Carrusel::get();
            $seccion_nom = $seccion;
			$seccion = Seccion::where('slug',$seccion)->first();
            $blogs = services::all();
			$elements = $seccion->elementos()->get();
            $ruta = 'configs.secciones.'.$seccion->seccion;

             
            if($seccion_nom == 'products'){
                $productos = Producto::paginate(8);
                $categorias = Categoria::paginate(4);
                foreach($productos as $p){
                    $prod_photos = ProductosPhoto::where('producto',$p->id)->get()->first();
                    if(!empty($prod_photos)){
                        $p->photo = $prod_photos->image;
                    }
                    
                }
                return view($ruta,compact('elements','seccion','productos','categorias'));
            }
            

			return view($ruta,compact('elements','seccion','blogs', 'carrusel'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seccion) {

		if (empty($seccion)) {
			\Toastr::error('Error, intentalo mas tarde');
			return redirect()->back();
		}

		$seccion = Seccion::find($seccion);

		$file = $request->file('portada');
		$oldFile = $seccion->portada;
		$extension = $file->getClientOriginalExtension();
		$namefile = Str::random(30) . '.' . $extension;

		\Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

		\Storage::disk('local')->delete("/img/photos/seccions/" . $oldFile);

		$seccion->portada = $namefile;

		$seccion->save();
		\Toastr::success('Guardado');
		return redirect()->back();
    }


    public function servicioDetalle($id){
        $blog = services::find($id);

        $detalle = Blog_desc::where('idBlog', $id)->get();
		return view('configs.secciones.blog_detalle', compact('blog', 'detalle'));
    }

    public function delete_detalle_blog(Request $request){
        $blog_del = Blog_desc::find($request->id_detail);
        if(!empty($blog_del->imagen)){
            \Storage::disk('local')->delete("/img/photos/servicios/" . $blog_del->imagen);
            if($blog_del->delete()){
                \Toastr::success('Imagen eliminada correctamente');
                return redirect()->back();
            }else{
                \Toastr::error('No se puedo eliminar la imagen');
                return redirect()->back();
            }
        }else{
            if($blog_del->delete()){
                \Toastr::success('Parrafo eliminado correctamente');
                return redirect()->back();
            }else{
                \Toastr::error('No se puedo eliminar el parrafo');
                return redirect()->back();
            }
            
        }
    }

    public function upTxt(Request $request){
        $texto = new Blog_desc;
        $texto->contenido = $request->blog_content;
        $texto->idBlog = $request->id_blog_texto;
        if($texto->save()){
            \Toastr::success('Parrafo creado correctamente');
            return redirect()->back();
        }else{
            \Toastr::error('No se puedo crear el parrafo');
            return redirect()->back();
        }
    }

    public function upImagen_blog(Request $request){
        $image = new Blog_desc;

        $file = $request->file('uploadedfile');
		$extension = $file->getClientOriginalExtension();
		$namefile = Str::random(30) . '.' . $extension;

		\Storage::disk('local')->put("/img/photos/servicios/" . $namefile, \File::get($file));

		$image->imagen = $namefile;
        $image->contenido = $request->blog_content;
        $image->idBlog = $request->id_blog_imagen;
        if($image->save()){
            \Toastr::success('Imagen añadida correctamente');
            return redirect()->back();
        }else{
            \Toastr::error('No se puedo añadir la imagen');
            return redirect()->back();
        }
    }

    public function up_blog_image(Request $request){
		$image = Blog_desc::find($request->id_blog);

		$file = $request->file('img_blog');
		$oldFile = $image->imagen;
		$extension = $file->getClientOriginalExtension();
		$namefile = Str::random(30) . '.' . $extension;

		\Storage::disk('local')->put("/img/photos/servicios/" . $namefile, \File::get($file));

		\Storage::disk('local')->delete("/img/photos/servicios/" . $oldFile);

		$image->imagen = $namefile;

		$image->save();
		\Toastr::success('Guardado');
		return redirect()->back();
    }
///////////////////////////////////////////////// GLOBALES SECCIONES //////////////////////////////////////////////
public function guardarContenido(Request $request){

    dd($request);
    $input = services::first();
    $contenidoCKEditor = $request->input('txt');
    $input->descripcion = $contenidoCKEditor;

    if($input->save()){
        \Toastr::success('Guardado');
		return redirect()->back();
    }else{
        \Toastr::error('No guarda');
		return redirect()->back();
    }

    
    return redirect()->back();
}

public function updateIniBlog(Request $request){
    $servicio = services::find($request->id);
    switch($request->valor){
        case 1:
                $servicio->inicio = 1;
                $servicio->save();
                return response()->json(['success'=>true, 'mensaje'=>'Blog anclado al inicio', 'valor'=>1]);
            
        break;

        case 2:
            $servicio->inicio = 0;
            $servicio->save();
            return response()->json(['success'=>true, 'mensaje'=>'Blog desanclado al inicio','valor'=>2]);
        break;
    }
}

public function elimblog(Request $request){
    $secciones = services::find($request->id_blog);
    $secciones->delete();

    \Toastr::success('Blog eliminado');
    return redirect()->to(url('admin/config/secciones/proyects'));
}

public function createBlog(Request $request){
    $blog = new services;

    $blog->titulo = $request->blogNomb;

    //si $request->file('archivo') que es  (el archivo de la imagen) es diferente de vacio
    if(!empty($request->file('archivo'))){
        $file = $request->file('archivo');
        $extension = $file->getClientOriginalExtension();
        $namefile = Str::random(30) . '.' . $extension;
        \Storage::disk('local')->put("/img/photos/servicios/" . $namefile, \File::get($file));

        $blog->image = $namefile;

        if($blog->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar');
            return redirect()->back();
        }
        
    }else{
        if($blog->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar');
            return redirect()->back();
        }
    }

}

public function adPortada_servicios(Request $request){				
    $services = services::find($request->id_prod);

    //si $request->file('archivo') que es  (el archivo de la imagen) es diferente de vacio
    if(!empty($request->file('uploadedfile'))){

        if(!empty($services->image)){
            \Storage::disk('local')->delete("/img/photos/servicios/" .$services->image);
        }

        //guardamos el archivo en una variable llamada $file
        $file = $request->file('uploadedfile');
        //creamos una variable llamada $extencion que sera igual a la extencian sacada del $file
        $extension = $file->getClientOriginalExtension();
        //creamos una variable llamada $namefile que almacenara un 
        $namefile = Str::random(30) . '.' . $extension;
        
        \Storage::disk('local')->put("/img/photos/servicios/" . $namefile, \File::get($file));

        $services->image = $namefile;

        if($services->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar');
            return redirect()->back();
        }
        
    }else{
        if($producto->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al guardar');
            return redirect()->back();
        }
    }
}

public function upimagen(Request $request) {
    if ($request->hasFile('imagen')) {
        // Agrega un registro para indicar que la función se está ejecutando
        Log::info('La función upimagen se está ejecutando');
        
        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->storeAs('public', $nombreImagen);
        $urlImagen = Storage::url('public/' . $nombreImagen);

        // Agrega un registro con la URL de la imagen
        Log::info('URL de la imagen almacenada: ' . $urlImagen);

        return response()->json(['location' => $urlImagen]);
    }
}


    public function imgPortadaGlobal(Request $request){
        if(!empty($request->file('uploadedfile'))){


            if(empty($request->id_element)){
                \Toastr::error('Error al subir imagen');
                return redirect()->back();
            }

            $portada = Elemento::find($request->id_element);

            if(!empty($portada->imagen)){
                \Storage::disk('local')->delete("/img/photos/seccions/" .$portada->imagen);
            }


            $file = $request->file('uploadedfile');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

            $portada->imagen =  $namefile;

            if($portada->save()){
                \Toastr::success('Guardado');
                return redirect()->back();
            }else{
                \Toastr::error('Error al subir imagen');
                return redirect()->back();
            }

        }

    }

    public function image_input_ejemplo(Request $request){
        
        if(!empty($request->file('archivo'))){//si es diferente de vacio el archivo entonces

            if(empty($request->id_elemento)){
                \Toastr::error('Error al subir imagen');
                return redirect()->back();
            }

            $elemento = Elemento::find($request->id_elemento);

            if(!empty($elemento->imagen)){
                \Storage::disk('local')->delete("/img/design/" .$elemento->imagen);
            }

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/design/" . $namefile, \File::get($file));

            $elemento->imagen = $namefile;

            if($elemento->save()){
                \Toastr::success('Guardado');
                return redirect()->back();
            }else{
                \Toastr::error('Error al subir imagen');
                return redirect()->back();
            }

        }else{
            \Toastr::error('Error al subir imagen');
            return redirect()->back();
        }
    }

    public function textglobalseccion(Request $request){
        if (empty($request->tabla)) {
            return response()->json(['success'=>false, 'mensaje'=>'Cambio Exitoso']);
        }

        $nameSpace = '\\App\\';
        $model = $nameSpace . ucfirst($request->tabla);

        $field = $request->campo;
        $val = $request->valor;

        $send = $model::find($request->id);
        $send->$field = $val;

        if ($send->save()) {
            if(isset($request->form)){
                \Toastr::success('Guardado');
                return redirect()->back();
            }else{
                return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);
            }
            
        }else {
            if(isset($request->form)){
                \Toastr::error('Error al guardar');
                return redirect()->back();
            }else{
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
            }
        }
    }

    public function portadaseccion(Request $request){
        $carrusel =new Carrusel;

        // if(!empty($carrusel->imagen)){
        //     \Storage::disk('local')->delete("/img/photos/seccions/" .$carrusel->imagen);
        // }

        if(!empty($request->file('archivo'))){

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/sliders/" . $namefile, \File::get($file));

            $carrusel->image =  $namefile;
            $carrusel->save();

            \Toastr::success('Guardado');
            return redirect()->back();

        } else {
            \Toastr::error('Error al guardar');
            return redirect()->back();
        }

    }

    public function upelementimg(Request $request, $id){

        $element = Elemento::find($id);

        if(!empty($element->imagen)){
            \Storage::disk('local')->delete("/img/photos/seccions/" .$element->imagen);
        }

        if(!empty($request->file('archivo'))){

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

            $element->imagen =  $namefile;
            $element->save();

            \Toastr::success('Guardado'); 
            return redirect()->back();
 
        }
 
    }

    public function deletesslider(Request $request){
        
        $carrusel = Carrusel::find($request->dslider);


        \Storage::disk('local')->delete("/img/photos/sliders/" .$carrusel->image);

        if($carrusel->delete()){
            \Toastr::success('Eliminado exitoso');
            return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar el servicio');
            return redirect()->back();
        }

    }

    public function textareaup(Request $request,$id){
        $element = Elemento::find($id);

        $element->texto = $request->textareaup;

        if($element->save()){
            \Toastr::success('Guardado');
            return redirect()->back();
        }else{
            \Toastr::error('Error al autualizar');
            return redirect()->back();
        }
    }


    ///////////////////////////////////////////////// funciones de categoria /////////////////////////////////////////////////

    public function newcat(Request $request){

        if(!empty($request->nuevo)){
            $categoria =new Categoria;

            $categoria->save();

            return redirect()->back();
        }

        return redirect()->back();

    }

    public function cattext(Request $request){

        $cat = Categoria::find($request->id);

        $campo = $request->campo;

        $cat->$campo = $request->valor;

        if($cat->save()){
            
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);

        }else{
            
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }

    }

    public function catimg(Request $request, $id){

        
        
        $cat = Categoria::find($request->id);

        if(!empty($cat->image)){
            if($cat->image != 'categoría01.png'){
                \Storage::disk('local')->delete("/img/design/" .$cat->image);
            }
        }

        if(!empty($request->file('archivo'))){

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/design/" . $namefile, \File::get($file));

            $cat->image =  $namefile;
            $cat->save();

            \Toastr::success('Guardado');
            return redirect()->back();

        }

    }

    public function del_cat(Request $request){

        $cat = Categoria::find($request->id_cat);

        if($cat->image !='categoría01.png'){
            \Storage::disk('local')->delete("/img/design/" .$cat->image);
        }

        $productos = Producto::where('categoria',$request->id_cat)->get();

        foreach($productos as $prod){
            $prod->categoria = null;
        }

        if($cat->delete()){
            \Toastr::success('Eliminado exitoso');
            return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar la cetegoria');
            return redirect()->back();
        }

    }

    ///////////////////////////////////////////////// end funciones de categoria /////////////////////////////////////////////////

    public function secciontexts(Request $request){

        $servicio = services::find($request->id);

        $campo = $request->campo;

        $servicio->$campo = $request->valor;

        if($servicio->save()){
            
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);

        }else{
            
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }


        

    }

    public function agrserv(){
        $servicios =new services;

        if($servicios->save()){
            return response()->json(['success'=>true, 'mensaje'=>'Agregado']);
        }else{
            return response()->json(['success'=>false, 'mensaje'=>'Error al agregar']);
        }

        

    }

    public function agrher(){
        $herramienta =new herramientas;

        if($herramienta->save()){
            return response()->json(['success'=>true, 'mensaje'=>'Agregado']);
        }else{
            return response()->json(['success'=>false, 'mensaje'=>'Error al agregar']);
        }

        

    }

    public function checkb(Request $request){
        

        $servicio = services::find($request->id);

        $servicios_des = services::where('inicio',1)->count();

        if($servicios_des == 4){
            if($request->valor == 'true'){
                return response()->json(['success'=>false, 'mensaje'=>'No puedes agregar mas de 4 servicios destacados']);
            }
            
        }

        if($request->valor == "true"){
            $servicio->inicio = 1;
            if($servicio->save()){
                return response()->json(['success'=>true, 'mensaje'=>'Se agrego a destacados']);
            }else{
                return response()->json(['success'=>false, 'mensaje'=>'Error al agregar']);
            }
        }else{
            $servicio->inicio = 0;
            if($servicio->save()){
                return response()->json(['success'=>true, 'mensaje'=>'Se removio de destacados']);
            }else{
                return response()->json(['success'=>false, 'mensaje'=>'Error al remover']);
            }
        }



        
    }

    public function selecticon(Request $request){

        $servicio = services::find($request->id);

        $servicio->icono = 'icono'.$request->valor.'.png';

        if($servicio->save()){
            return response()->json(['success'=>true, 'mensaje'=>'Actualizacion de icono exitoso']);
        }else{
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar icono']);
        }

        
    }

    public function portadaservicio(Request $request, $id){

        $servicio = services::find($id);

        if(!empty($servicio->image)){
            if($servicio->image !='servicio_1.png'){
                \Storage::disk('local')->delete("/img/photos/seccions/" .$servicio->image);
            }
        }

        if(!empty($request->file('image_service'))){

            $file = $request->file('image_service');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;
           

            \Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

            $servicio->image =  $namefile;
            $servicio->save();

            \Toastr::success('Guardado');
            return redirect()->back();

        }

    }

    public function deletes(Request $request){
        
        $servicio = services::find($request->elimins);

        if($servicio->image !='servicio_1.png'){
            \Storage::disk('local')->delete("/img/photos/seccions/" .$servicio->image);
        }

        if($servicio->delete()){
            \Toastr::success('Eliminado exitoso');
            return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar el servicio');
            return redirect()->back();
        }

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccion $seccion)
    {
        //
    }


    /////////////////////////////////// funciones de categoria /////////////////////////////////// 



    public function agcategoria(Request $request){

if(!empty($request->nom_cat)){

            $categoria = new Categoria;
            $categoria->nombre = $request->nom_cat;

            if($categoria->save()){
                \Toastr::success('Categoria agregada');
            }else{
                \Toastr::error('Error al algregar categoria');
            }
        }
        return redirect()->back();

    }

    public function elimCat(Request $request){

        $categoria = Categoria::find($request->id_cat);
        
        if(!empty($categoria->image)){
            \Storage::disk('local')->delete("/img/photos/categorias/" .$categoria->image);
        }

        $productos = Producto::where('categoria',$categoria->id)->get();

        foreach($productos as $p){
            $p->categoria = null;
            $p->save();
        }

        if($categoria->delete()){
            \Toastr::success('categoria Eliminado');
        }else{
            \Toastr::error('Error al eliminar categoria');
        }

        return redirect()->back();

    }

    /////////////////////////////////// funciones de categoria /////////////////////////////////// 

    /////////////////////////////////// funciones de prooyectos /////////////////////////////////// 

    public function agproyect(Request $request){


        if(!empty($request->file('archivo'))){
            $proyecto = new services;
            $proyecto->titulo = $request->nom_proy;
            $proyecto->descripcion = $request->desc_proy;

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/servicios/" . $namefile, \File::get($file));

            $proyecto->image = $namefile;

            if($proyecto->save()){
                \Toastr::success('Proyecto agregada');
            }else{
                \Toastr::error('Error al algregar proyecto');
            }
        }else{
            \Toastr::error('Error al algregar proyecto');
        }
        
        return redirect()->back();

    }

    public function elimProy(Request $request){

        $proyecto = services::find($request->id_proy);
        
        if(!empty($proyecto->image)){
            \Storage::disk('local')->delete("/img/photos/servicios/" .$proyecto->image);
        }

        if($proyecto->delete()){
            \Toastr::success('Proyecto Eliminado');
        }else{
            \Toastr::error('Error al eliminar proyecto');
        }

        return redirect()->back(); 

    }

    public function deletecampo(Request $request){
        $objeto = services::where('id', $request->idCampo)->first();
    
        if($objeto->delete()){
            \Toastr::success('Campo Eliminado Correctamente');
        }else{
            \Toastr::error('Error al eliminar Campo');
        }

        return redirect()->back();
    }

    /////////////////////////////////// funciones de prooyectos /////////////////////////////////// 
    
}
