<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seccion;
use App\Elemento;
use App\Configuracion;
use App\Faq;
use App\Politica;
use App\Producto;
use App\Frase;
use App\Carrusel;
use App\Socio;
use Illuminate\Support\Str;


class SeccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $seccion = Seccion::all();

        return view('config.secciones.index',compact('seccion'));
    }

    public function show($seccion) {
        $config = Configuracion::first();

		$seccion = Seccion::where('slug',$seccion)->first();
        $elements = Elemento::where('seccion',$seccion->id)->get();
        $elem_general = Elemento::all();
        $faqs = Faq::all();
        $politicas = Politica::all();
        $productos = Producto::all();
        $frases = Frase::all();
        $carrusel = Carrusel::all();
        $socio = Socio::all();

        if($seccion->seccion == 'configuracion') {
            $ruta = 'config.general.contacto';
        } else if($seccion->seccion == 'politicas') {
            $ruta = 'config.politicas.index';
        } else if($seccion->seccion == 'faqs') {
            $ruta = 'config.faqs.index';
        } else {
            $ruta = 'config.secciones.'.$seccion->seccion;
        }

        return view($ruta, compact('seccion', 'config', 'elem_general', 'faqs', 'politicas', 'productos','frases', 'carrusel', 'elements', 'socio'));
    }

    public function guardarSocio(Request $request){
        $socio = new Socio;
        $socio->Nombre = $request->nombre;
        $socio->Descripcion = $request->desc;
        $socio->color1 = $request->color1;
        $socio->color2 = $request->color2;
        $socio->whats = $request->whats;
        $socio->insta = $request->insta;
        $socio->face = $request->face;
        if(isset($request->imagen)){
            
			$file = $request->imagen;
            
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;
			
			\Storage::disk('local')->put("/img/home/" . $namefile, \File::get($file));

			$socio->imagen = $namefile;
            
			if($socio->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back(); 
			}
			
		}else{
            \Toastr::error('Error al guardar imaegn');
				return redirect()->back(); 
        }
    }

    public function guardarTarjeta(Request $request){
        $tarjeta = new Frase;
        $tarjeta->titulo = $request->titulo;
        $tarjeta->descripcion = $request->desc;
        $tarjeta->color = $request->color;
        if(isset($request->icono)){
            
			$file = $request->icono;
            
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;
			
			\Storage::disk('local')->put("/img/home/" . $namefile, \File::get($file));

			$tarjeta->icono = $namefile;
            
			if($tarjeta->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back(); 
			}
			
		}else{
            \Toastr::error('Error al guardar imaegn');
				return redirect()->back(); 
        }
    }

    public function deletetarjeta(Request $request){
        $tarjeta = Frase::find($request->id_tarjeta);
        \Storage::disk('local')->delete("/img/home/" .$tarjeta->icono);

        if ($tarjeta->delete()) {
            \Toastr::success('Tarjeta eliminada correctamente');
			return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar tarjeta');
				return redirect()->back(); 
        }
    }

    public function deletesocio(Request $request){
        $socio = Socio::find($request->id_socio);
        \Storage::disk('local')->delete("/img/home/" .$socio->imagen);

        if ($socio->delete()) {
            \Toastr::success('Socio eliminada correctamente');
			return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar Socio');
				return redirect()->back(); 
        }

    }

    public function addcarrousel(Request $request){
        $carrusel = new Carrusel;
        $carrusel->numeroCarrusel = $request->numero_carrusel;
        
        if(file_exists($request->file('carrusel_slider'))){
            
			$file = $request->file('carrusel_slider');
            
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;
			
			\Storage::disk('local')->put("/img/carrousel/" . $namefile, \File::get($file));

			$carrusel->imagen = $namefile;
            
			if($carrusel->save()){
				\Toastr::success('Guardado');
				return redirect()->back();
			}else{
				\Toastr::error('Error al guardar');
				return redirect()->back(); 
			}
			
		}else{
            \Toastr::error('Error al guardar imaegn');
				return redirect()->back(); 
        }
    }

    public function deleteslider(Request $request){
        $slider = Carrusel::find($request->idslider);
        \Storage::disk('local')->delete("/img/home/" .$slider->imagen);

        if ($slider->delete()) {
            \Toastr::success('Tarjeta eliminada correctamente');
			return redirect()->back();
        }else{
            \Toastr::error('Error al eliminar tarjeta');
				return redirect()->back(); 
        }
    }

    public function cambiarImagen(Request $request){

        if(!empty($request->file('uploadedfile'))){

            if(empty($request->id_element)){
                \Toastr::error('Error al subir imagen');
                return redirect()->back();
            }

            $portada = Elemento::find($request->id_element);

            if(!empty($portada->imagen)){
                \Storage::disk('local')->delete("/img/home/" .$portada->imagen);
            }


            $file = $request->file('uploadedfile');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30) . '.' . $extension;

            \Storage::disk('local')->put("/img/home/" . $namefile, \File::get($file));

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

    public function textglobalseccion(Request $request){
        if (empty($request->tabla)) {
            return false;
        }

        $nameSpace = '\\App\\';
        $model = $nameSpace . ucfirst($request->tabla);

        $field = $request->campo;
        $val = $request->valor;
        // $model = $model::find($request->id);
        // $model->$field = $request->valor;
        // $model->save();

        // $model::find($request->id)->update(["$field" => "$val"]);
        if ($model::find($request->id)->update(["$field" => "$val"])) {
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);
        }else {
            // code...
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }
        // return $request->valor;
    }
}



