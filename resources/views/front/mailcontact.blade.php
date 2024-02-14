<html>
<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$data['asunto']}}</title>
</head>
<body>

	<table class="container" style="background: ; width: 100%; height: 100%;">


		<tr style="background: ;">
			<td style="background: ;  ">
				<table style="width: 70%; background: #FFECC1; height: 100px; margin: 0 auto; border-radius: 26px;">
					<tr >
						<td style="background: ;">
							<table style="background: #FFECC1; margin: 0 auto;"><tr><td><img style="margin-top: 20px; margin: 20px 0%; " src="" alt=""></td></tr></table>
						</td>
					</tr>
					<tr>
						<td style="background: white; padding: 2%; font-family: Arial, Helvetica, sans-serif; border-bottom-left-radius: 26px; border-bottom-right-radius: 26px; ">
							<table style="width: 100%; background: ; text-align: center;">
								<tr >
									<td >
										<h1 style=" margin-top: 20px; margin-bottom: 50px; ">Formulario de contacto:</h1>
									</td>
								</tr>
								<tr>
									<td>
										<h3>Nombre:{{$data['nombre']}}</h3>
									</td>
								</tr>
								<tr>
									<td>
										<h3>Correo:{{$data['correo']}}</h3>
									</td>
								</tr>
									@if (!empty($data['whatsapp']))
								<tr>
									<td>
										<h3>Whatsapp:{{$data['telefono']}}</h3>
									</td>
								</tr>
									@endif
								<tr >
									<td>
										<h2 style="margin-top: 50px; margin-bottom: 30px;">MENSAJE</h2>
									</td>
								</tr>
								<tr >
									<td>
										<h3 style=" padding: 2% 10%;">{{$data['mensaje']}}</h3>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>

	</table>
	
</body>

</html>
