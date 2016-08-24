@extends('plantilla.login')
@section('contenido')
	<div class="contenido" style="height: 1000px;">
		<table class="table sin_bordes" style="width: 400px;">  <!-- table-bordered -->
			<tbody>
					
					<tr class="texto_centrado">
						<td>
						</td>
						<td style="text-align: left">
							<img src="images/plantilla/logo_visor_color.png">
							<br>
							<label>Usuario</label>
							<input type="text" class="form-control" id="usr" placeholder="Ingrese el usuario">
						</td>
						<td>

						</td>
					</tr>
					<tr class="texto_centrado">
						<td>
							 . 
						</td>
						<td style="text-align: left">
							<label>Contraseña</label>
							<input type="text" class="form-control" id="usr" placeholder="Ingrese su contraseña">
						</td>
						<td>
							
						</td>
						<td>
						</td>
					</tr>

					<tr class="texto_centrado">
						<td>
							 . 
						</td>
						<td>
							<a href="#" class="btn btn-primary btn-lg active boton_azul_sombra" role="button">Entrar</a>
						</td>
						<td>
							
						</td>
						<td>
						</td>
					</tr>
					
			</tbody>
		</table>
	</div>
@endsection