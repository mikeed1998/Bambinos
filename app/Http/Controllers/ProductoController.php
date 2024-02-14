<?php

namespace App\Http\Controllers;

use App\services;
use App\Producto;
use App\colores;
use App\ProductosPhoto;
use App\ProductoMedida;
use App\Categoria;
use App\Marca;
use App\ProductoRelacion;
use App\CategoriaDetalle;
use App\Detalle_blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function index() {
		$products = Producto::orderBy('orden', 'asc')->get();

		foreach ($products as $prod) {
			$prod->categoria = Categoria::find($prod->categoria);
		}

		return view('admin.productos.index', compact('products'));
    }

    public function create() {
			$categParent = Categoria::where('parent',0)->get();
			return view('admin.productos.create',compact(['categParent']));
    }


    public function store(Request $request) {


		// $validate = Validator::make($request->all(), [
		// 	'nombre' => 'required',
		// 	'descripcion' => 'required',
		// ], [], []);


		// if ($validate->fails()) {
		// 	\Toastr::error('Error, se requieren mas datos');
		// 	return redirect()->back()->withErrors($validate);
		// }

		$product = new Producto;

		$product->nombre = $request->titulo;
		$product->descripcion = $request->descripcion;

		if($product->save()){

			if(!empty($request->file('archivo'))){

				$producto_photo = new ProductosPhoto;
				$producto_photo->producto = $product->id;
	
				$file = $request->file('archivo');
				$extension = $file->getClientOriginalExtension();
				$namefile = Str::random(30) . '.' . $extension;
	
				\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));
	
				$producto_photo->image =  $namefile;
	
				if($producto_photo->save()){
					\Toastr::success('Guardado');
					return redirect()->back();
				}else{
					\Toastr::error('Error al subir imagen');
					return redirect()->back();
				}
	
			}else{
				\Toastr::success('Guardado');
				return redirect()->back();
			}
		}else{
			\Toastr::error('Error al agregar producto');
			return redirect()->back();
		}

		// \Toastr::success('Guardado');
		// return redirect()->route('productos.show', $product->id);
    }

    public function show(Request $request) {
		$productos = Producto::paginate(25);
		$categoria = Categoria::get();
		$cate_buscar = $request->mi_lista;
		$txt_buscar = $request->busqueda_txt;
		
        if(!empty($cate_buscar)){
            if($cate_buscar != "todos_los_productos"){
                $categoria_buscada = Categoria::find($cate_buscar);
                $cate_id = $categoria_buscada->id;
                $productos = DB::table('productos')
                ->select('id', 'nombre', 'descripcion', 'categoria', 'portada', 'precio', 'color', 'inicio')
                ->where('categoria','LIKE','%'.$cate_id.'%')
                ->paginate(12);

            }else{
                if(!empty($txt_buscar)){
                    $productos = DB::table('productos')
                    ->select('id', 'nombre', 'descripcion', 'categoria', 'portada', 'precio', 'color', 'inicio')
                    ->where('nombre','LIKE','%' . $txt_buscar . '%')
                    ->orwhere('descripcion', 'LIKE', '%' . $txt_buscar . '%')
                    ->paginate(12);

                    if($productos->count() == 0){
                        $productos = Producto::get()->paginate(12);
                    }
                }
            }
        }
  		return view('admin.productos.show', compact('productos','categoria'));
    }

    public function edit($producto) {
			$product = Producto::find($producto);

			return view('admin.productos.edit', compact('product'));
	}


    public function update(Request $request, $producto) {
  		$product = Producto::find($producto);

  		if (empty($product)) {
  			\Toastr::error('Error, no se encontro el producto a modificar');
  			return redirect()->back();
  		}

  		$validate = Validator::make($request->all(), [
  			'nombre' => 'required',
  			'descripcion' => 'required',
  		], [], []);

  		if ($validate->fails()) {
  			\Toastr::error('Error, se requieren mas datos');
  			return redirect()->back()->withErrors($validate);
  		}


  		$product->nombre = $request->nombre;
  		$product->descripcion = $request->descripcion;
  		// $product->descuento = $request->descuento;
  		// $product->slug = Str::slug($request->nombre, '-');

  		$product->save();

  		\Toastr::success('Guardado');
  		return redirect()->route('productos.show', $product->id);
    }


    public function updateimg(Request $request, $producto) {
  		$product = Producto::find($producto);

      if ($request->hasFile('portada') || $request->hasFile('medidas')) {
        $field = $request->type;
  			$file = $request->file($field);
  			$extension = $file->getClientOriginalExtension();
  			$namefile = Str::random(30) . '.' . $extension;

  			\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

  			if (!empty($product->$field)) {
  				\Storage::disk('local')->delete("/img/photos/productos/" . $product->$field);
  			}

  			$product->$field = $namefile;
  		}

  		$product->save();

  		\Toastr::success('Guardado');
  		return redirect()->route('productos.show', $product->id);
    }


	public function cambImgProd(Request $request){

		

		$producto_photo = ProductosPhoto::where('producto',$request->id_p)->get()->first();

				
		if(!empty($producto_photo) && $producto_photo->image != 'producto_01.png'){
			\Storage::disk('local')->delete("/img/photos/productos/" .$producto_photo->image);
		}


        if(!empty($request->file('archivo'))){

			if(empty($producto_photo)){
				$producto_photo =new ProductosPhoto;
				$producto_photo->producto = $request->id_p;
			}

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

            $producto_photo->image =  $namefile;
            
			if($producto_photo->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back();
			}


        }
	}

    public function destroy(Request $request) {

			if (empty($request->producto)) {
				\Toastr::error('Error, intentalo mas tarde');
				return redirect()->back();
			}

			$producto = Producto::find($request->producto);

			if (!empty($producto)) {

				if (!empty($producto->portada)) {
					\Storage::disk('local')->delete("/img/photos/productos/" . $producto->portada);
				}
				$producto->delete();
				\Toastr::success('Eliminado Exitosamente');
				return redirect()->back();

			}
    }

	public function nuevoprod(Request $request){

		$producto =new Producto;

		if($producto->save()){
			\Toastr::success('Agregado correctamente');
			return redirect()->back();
		}else{
			\Toastr::error('Error al agregar');
			return redirect()->back();
		}

		

	}

	public function del_prod(Request $request){
		
		 $producto = Producto::find($request->id_prod);
		
		 $photos_p = ProductosPhoto::where('producto',$producto)->get();

		 foreach($photos_p as $photo_p){
			\Storage::disk('local')->delete("/img/photos/productos/" .$photo_p->image);
			$photo_p->delete();
		 }

		 if($producto->delete()){
			\Toastr::success('Eliminado Exitosamente');
			return redirect()->back();
		 }else{
			\Toastr::error('Error al eliminar');
			return redirect()->back();
		 }

	}

	public function portada_prod(Request $request, $id){

		$producto = Producto::find($id);

		
		if($producto->portada != 'producto_01.png'){
			\Storage::disk('local')->delete("/img/photos/productos/" .$producto->portada);
		}


        if(!empty($request->file('archivo'))){

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

            $producto->portada =  $namefile;
            
			if($producto->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back();
			}


        }

	}

    public function prodtext(Request $request){

        $producto = Producto::find($request->id);

        $campo = $request->campo;

        $producto->$campo = $request->valor;

        if($producto->save()){
            
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);

        }else{
            
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }

    }

	public function selectcat(Request $request){
		$producto = Producto::find($request->id);

		$categoria = Categoria::find($request->valor);

		$producto->categoria = $categoria->nombre;

        if($producto->save()){
            
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);

        }else{
            
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }
	}

	public function prodDetalle($id){

		$producto = Producto::find($id);
		
		$productos_photos =  ProductosPhoto::where('producto',$producto->id)->get();

		return view('configs.secciones.productod',compact('producto','productos_photos'));

	}

	public function productogaleria(Request $request, $id){

		$productof =new ProductosPhoto;

        if(!empty($request->file('archivo'))){

            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

			$productof->producto = $id;

            $productof->image =  $namefile;
            
			if($productof->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back();
			}


        }

	}

	public function createprod(Request $request){
		$producto_nuevo = new Producto;

		$producto_nuevo->nombre = $request->dembrep;
		$producto_nuevo->descripcion = $request->descripcionp;
		$producto_nuevo->categoria = $request->categoria;
		$producto_nuevo->cantidad = $request->cantidad;
		$producto_nuevo->precio = $request->precio;
		$producto_nuevo->color = $request->presentacion;

		if(!empty($request->file('archivo'))){

			$file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;
			
			\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

			$producto_nuevo->portada = $namefile;

			if($producto_nuevo->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back();
			}
			
		}else{
			if($producto_nuevo->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back();
			}
		}

	}

	public function viewProduct($id){
		$producto = Producto::find($id);
		$prodGaleria = ProductosPhoto::where('producto',$producto->id)->get();
		$categoria = Categoria::find($producto->categoria);
		$categorias = Categoria::all();
		$servicios1 = services::where('icono', $id)->where('descripcion', 7)->get();
		$servicios2 = services::where('icono', $id)->where('descripcion', 8)->get();


		return view('configs.secciones.productosd',compact('producto','prodGaleria','categoria','categorias', 'servicios1', 'servicios2'));
	}

	public function addmultiimage(Request $request){
		$id_prod = $request->id_prod;
		if ($request->hasFile('uploadedfile')) {
			$images = $request->file('uploadedfile');
			foreach ($images as $image) {
				$newprodphoto = new ProductosPhoto;
				$extension = $image->getClientOriginalExtension();
				$namefile = Str::random(30) . '.' . $extension;
				\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($image));
				
				$newprodphoto->producto = $id_prod;
				$newprodphoto->image = $namefile;

				$newprodphoto->save();
			}
			\Toastr::success('Guardado');
			return redirect()->back();
		} else { 
			\Toastr::error('Ningún archivo seleccionado.');
			return redirect()->back();
		}
	}

	public function delete_slider(Request $request){
		$id_prod = ProductosPhoto::find($request->id_produ_delete); 

		if($id_prod->delete()){
			\Toastr::success('Imagen de Slider eliminada');
			return redirect()->back();
		}else{
			\Toastr::success('Imagen de Slider no se pudo eliminar');
			return redirect()->back();
		}
	}

	public function createColor(Request $request){
		$color = new colores;
		$color->nombre = $request->nombre_color;
		$color->color = $request->color_select;
		if($color->save()){
			\Toastr::success('Color Guardado');
			return redirect()->back();
		} else {
			\Toastr::error('Error al guardar el color');
			return redirect()->back();
		}
	}

	public function adPortada(Request $request){				
				$producto = Producto::find($request->id_prod);
		
				//si $request->file('archivo') que es  (el archivo de la imagen) es diferente de vacio
				if(!empty($request->file('uploadedfile'))){

					if(!empty($producto->portada)){
						\Storage::disk('local')->delete("/img/photos/productos/" .$producto->portada);
					}
		
					//guardamos el archivo en una variable llamada $file
					$file = $request->file('uploadedfile');
					//creamos una variable llamada $extencion que sera igual a la extencian sacada del $file
					$extension = $file->getClientOriginalExtension();
					//creamos una variable llamada $namefile que almacenara un 
					$namefile = Str::random(30) . '.' . $extension;
					
					\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));
		
					$producto->portada = $namefile;
		
					if($producto->save()){
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

	public function updateIni(Request $request){
		$producto = Producto::find($request->id);
		switch($request->valor){
			case 1:
					$producto->inicio = 1;
					$producto->save();
					return response()->json(['success'=>true, 'mensaje'=>'Producto anclado al inicio', 'valor'=>1]);
				
			break;

			case 2:
				$producto->inicio = 0;
				$producto->save();
				return response()->json(['success'=>true, 'mensaje'=>'Producto desanclado al inicio','valor'=>2]);
			break;
		}

		

	}

	public function elimp(Request $request){


		$producto = Producto::find($request->id_p);

		$producto->delete();

		\Toastr::success('Producto eliminado');
		return redirect()->to(url('admin/config/secciones/products'));
	}
}
