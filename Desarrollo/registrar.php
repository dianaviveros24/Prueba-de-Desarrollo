<?php

 $conexion = mysqli_connect("178.128.146.252", "admin_sigmauser", "pfaDKIJyPF", "admin_sigmatest");

 // if ($conexion) {
 // 	echo "Todo correcto";
 // }

if (isset($_POST['enviar'])) {
	if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) && strlen($_POST['state']) >= 1 && strlen($_POST['city']) >= 1){
		
		$name = ($_POST['name']);
		$email = ($_POST['email']);
		$state = ($_POST['state']);
		$city = ($_POST['city']);

		$consulta = "INSERT INTO contacts (name, email, state, city) VALUES ('$name', '$email', '$state', '$city')";

		$resultado = mysqli_query($conexion, $consulta);
		if ($resultado) {
	 	 	echo( '<div id="modal" class="o-modal-container">
	             <div class="modal-content">
	                  <span class="close">×</span>
	                  <p>Tu información ha sido recibida satisfactoriamente</p>
	         	</div>');

		} else {
			echo "<h6 class='bad'> No Inscrito </h6>"; 

		}  
	}

		if(empty($_POST['email'])){
			echo "<p class='bad'> Agrega tu email </p>"; 
		} else {
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo "<p class='bad'> Agrega un email válido </p>"; 
			}
		} 

		if(empty($_POST['name'])){
			echo "<p class='bad'> Agrega tu nombre </p>"; 
		} else {
			if(strlen($_POST['name']) > 50){
				echo "<p class='bad'> El nombre es muy largo</p>"; 
		} else {
			if(is_numeric($_POST['name'])){
				echo "<p class='bad'> El nombre debe contener solo texto</p>";
			}
		}

}
}


   	 // $url = "https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json";
   	 // $json = file_get_contents($url);
   	 // $array = json_decode($json,true);
     // var_dump($array);

 ?>
     <script type="text/javascript" src="modal.js"></script>








  

