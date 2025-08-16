<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>CARLOS ANIBAL MARTINEZ ALVARENGA MA100821]</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/sha1.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="contenedor">
				<div class="row align-items-center h-100">
					<div class="col"></div>
					<div class="col">
						<div class="align-items-center">
							<p>[CARLOS ANIBAL MARTINEZ ALVARENGA]</p>
							<form name="frm_login" id="frm_login" method="post" action="core/process.php">
								<table>
									<thead>
										<tr>
											<th class="parrafo_centrado">Inicio de sesión</th>
										</tr>
										<tr>
											<th>&nbsp;</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="txt_usuario">Usuario: </label>
														<input type="text" class="form-control" name="txt_usuario" id="txt_usuario" maxlength="15" aria-describedby="txt_user_help" required />
														<small id="txt_user_help" class="form-text text-muted">El usuario es obligatorio</small>
													</div>
													<div class="form-group col-md-6">
														<label for="txt_password">Contraseña: </label>
														<input type="password" class="form-control" name="txt_password" id="txt_password" maxlength="15" aria-describedby="txt_password_help" required />
														<small id="txt_password_help" class="form-text text-muted">La contraseña es obligatoria</small>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td align="center">
												<button type="button" class="btn btn-primary" name="btn_entrar" id="btn_entrar">Iniciar sesión</button>
												<div class="mensaje"></div>
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			funtion enviar_datos(u,p){

				$p.post($("#frm_login").attr("action"), //ruta para envion de datos (URI)
					{
						txt_usuario: u,
						txt_password: p
					}
				).done(function (datos){
					window.location.replace(datos.data.url+"?token="+datos.data.token);
				}).fail(function(xhr,status,error){
					$(".mensaje").html(xhr,responseJSON,error.message)					
				});
				
				
				$(document).ready(function()){
					//si la persona presiona el boton "iniciar sesion"
					$("#btn_entrar").click(function(){
						//se ejecuta la funcion enviar_datos
						enviar_datos($("#txt_usuario"),$("#txt_password"));
					});

					//si la persona presiona "enter" mientras el puntero esta en el campo
					// txt_usuario
					$("#txt_usuario").keypress(function(event){
						//se evalua si la tecla presionada es enter
						if(event.which == 13){
							//se ejecuta la funcion enviar datos()
							enviar_datos($("#txt_usuario")),$("#txt_password"));
						}
					});
					//si la persona presiona "enter" mientras el focus esta en el campo
					// txt_password
					$("#txt_password").keypress(function(event){
						//se evalua si la tecla presionada es enter
						if(event.which== 13){
							//se ejecuta la funcion enviar datos()
							enviar_datos($("#txt_usuario")),$("#txt_password"));
						}
					});
				});
			}
		</script>
	</body>
</html>
