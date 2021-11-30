<?php 

include("con_db.php");

if (isset($_POST['Guardar'])) {
    if (strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $consulta = "INSERT INTO telefono VALUES ('$name')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>Número de teléfono guardado</h3>
           <?php
	    } else {
	    	?> 
	    	<h3>Se produjo un error, intente de nuevo</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>El campo no puede estar vacío</h3>
           <?php
    }
}

?>
