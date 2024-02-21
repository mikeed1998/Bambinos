<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use App\colores;
use App\services;
use App\herramientas;
use App\equipo;
use App\logoequipos;
use Carbon\Carbon;
use App\Blog_desc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function index(){
			$elements = Elemento::where('seccion',1)->get();
			$servicios = services::all();
			$categoria = Categoria::all();
			$productos = Producto::where('inicio',1)->get();
			$carrusel = Carrusel::get();
			foreach($productos as $p){
				$prod_photos = ProductosPhoto::where('producto',$p->id)->get()->first();
				if(!empty($prod_photos)){
					$p->photo = $prod_photos->image;
				}

			}
			$user=null;
			if(auth()->check()){
				$user = auth()->user();
			}
			return view('front.index',compact('elements','servicios','categoria','productos','user', 'carrusel'));
	}

	public function perfil(Request $request, $id){
		$user=null;
			if(auth()->check()){
				$user = auth()->user();
			}
		$producto = Producto::find($id);
		$servicios1 = services::where('icono', $id)->where('descripcion', 7)->get();
		$servicios2 = services::where('icono', $id)->where('descripcion', 8)->get();

		return view('front.perfil-vacante', compact('user', 'producto', 'servicios1', 'servicios2'));
	}

	// public function shop(Request $request){
	// 	$user=null;
	// 	if(auth()->check()){
	// 		$user = auth()->user();
	// 	}
	// 	// dd($request->busqueda_txt, $request->mi_lista);
	// 	$categoria = Categoria::get();
	// 	$produsctos = Producto::paginate(20);
	// 	$cate_buscar = $request->mi_lista;
	// 	$txt_buscar = $request->busqueda_txt;

	// 	if(!empty($cate_buscar)){
	// 		if($cate_buscar != "todos_los_productos"){
	// 			$categoria_buscada = Categoria::find($cate_buscar);
	// 			$cate_id = $categoria_buscada->id;
	// 			$produsctos = DB::table('productos')
	// 			->select('id', 'nombre', 'descripcion', 'categoria', 'portada', 'precio', 'color', 'inicio')
	// 			->where('categoria','LIKE','%'.$cate_id.'%')
	// 			->paginate(10000);
	// 		}else{
	// 			if(!empty($txt_buscar)){
	// 				$produsctos = DB::table('productos')
	// 				->select('id', 'nombre', 'descripcion', 'categoria', 'portada', 'precio', 'color', 'inicio')
	// 				->where('nombre','LIKE','%' . $txt_buscar . '%')
	// 				->orwhere('descripcion', 'LIKE', '%' . $txt_buscar . '%')
	// 				->paginate(10000);

	// 				if($produsctos->count() == 0){
	// 					$produsctos = Producto::paginate(20);
	// 				}
	// 			}

	// 		}
	// 	}

	// 	return view('front.shop',compact('user', 'categoria', 'produsctos'));
	// }




	public function producto($id){
		$producto = Producto::where('id', $id)->first();
		$user=null;
		if(auth()->check()){
			$user = auth()->user();
		}
		return view('front.producto', compact('user', 'producto'));
	}


	public function contact(){
		$user=null;
		if(auth()->check()){
			$user = auth()->user();
		}
		return view('front.contacto',compact('user'));
	}

	// correo de contacto normal
	public function mailcontact(Request $request){
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'whatsapp' => 'nullable',
			'correo' => 'required',
			'mensaje' => 'nullable',
		],[],[]);
		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos los datos');
			return redirect()->back();
		}
		$data = array(
			'nombre' => $request->nombre,
			'whatsapp' => $request->telefono,
			'correo' => $request->correo,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);
		$html = view('front.mailcontact',compact('data'));
		$config = Configuracion::first();
		$mail = new PHPMailer;
		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = $config->remitenteport;
			$mail->SetFrom($config->remitente, 'Formulario Contacto');
			$mail->isHTML(true);
			$mail->addAddress($config->destinatario,'');
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,'FUNGI PEOLPLE CONTACTO');
			}
			$mail->Subject = $data['asunto'];
			$mail->msgHTML($html);
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			if($mail->send()){
			//Contacto@dineroorganico.com
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
			}else{
				\Toastr::error('Error al enviar el correo');
				return redirect()->back();
			}
		} catch (phpmailerException $e) {
			\Toastr::error($e->errorMessage());//Pretty error messages from PHPMailer
			return redirect()->back();
		} catch (Exception $e) {
			\Toastr::error($e->getMessage());//Boring error messages from anything else!
			return redirect()->back();
		}
	}
}
