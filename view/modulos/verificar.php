<!--=====================================
=            Verificar    =
======================================-->

<?php
	
	$verifiedUser= false;
	
	$item="emailEncriptado";
	$value= $routes[1];

	$respuesta = ControllerUser::ctrViewUser($item, $value);


	if($value==$respuesta["emailEncriptado"])   {

		$id= $respuesta["id"];
		$item2="verification";
		$value2= 0;

		$respuesta2 = ControllerUser::ctrUpdateUser($id, $item2, $value2);

		

		

		if ($respuesta2 =="ok"){

			$verifiedUser= true;

		}



	}

	

	


?>

<div  class="container">
	
	<div class="row">
		
		<div class="col-xs-12 text-center verificar">

			<?php

				if ($verifiedUser){

					echo '<h3>Gracias</h3>
						<h2><small>¡Hemos verificado su correo electrónico, ya puede ingresar al sistema!</small></h2>

						<br>

						<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default backColor btn-lg">INGRESAR</button></a>';
				

				}else{

					echo '<h3>Error</h3>

					<h2><small>¡No se ha podido verificar el correo electrónico,  vuelva a registrarse!</small></h2>

					<br>

					<a href="#modalRegistro" data-toggle="modal"><button class="btn btn-default backColor btn-lg">REGISTRO</button></a>';




				}


			?>
			




		</div>

	</div>

</div>