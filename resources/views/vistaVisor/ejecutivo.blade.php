@extends('plantilla.menu')
@section('contenido')
EJECUTIVO
	<div class="contenido">
		<table class="table sin_bordes">  <!-- table-bordered -->
			<tbody>
					<tr class="texto_centrado">
						<td>
							<br /><br /><br /><br /><br /><br />
							<img src="images/plantilla/video_usuario.png">
							<div class=fondo_texto_usuario>
								<strong>Javiera </strong><br />
								Usuario
							</div>

						</td>
						<td>
							<br /><br /><br /><br /><br /><br />
							<img src="images/plantilla/logo_visor_color.png">
							<br /><br /><br /><br /><br /><br /> 
						</td>						
						<td>
							<br /><br /><br /><br /><br /><br />
							<img src="images/plantilla/video_traductor.png">
							<div class=fondo_texto_usuario>
								<strong>Javiera </strong><br />
								Usuario
							</div>

						</td>
					</tr>
					<tr class="texto_centrado">
						<td>
							<textarea class="form-control" rows="3" class="boton_azul_sombra" placeholder="Mensaje usuario"></textarea>
						</td>
						<td>
							<textarea class="form-control" rows="3" class="boton_azul_sombra" placeholder="Mensaje privado traductor"></textarea>
						</td>
						<td>
							<textarea class="form-control" rows="3" class="boton_azul_sombra" placeholder="Mensaje traductor"></textarea>
						</td>
					</tr>
					<tr class="texto_centrado">
						<td>
							<a href="#" class="btn btn-primary btn-lg active boton_azul_sombra" role="button">Enviar</a>
						</td>
						<td>
							<a href="#" class="btn btn-primary btn-lg active boton_azul_sombra" role="button">Enviar</a>
						</td>						
						<td>
							<a href="#" class="btn btn-primary btn-lg active boton_azul_sombra" role="button">Enviar</a>
						</td>
					</tr>
			</tbody>
		</table>
	</div>
@endsection