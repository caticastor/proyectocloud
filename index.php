<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE TELEFONOS</title>
	<meta charset="utf-8">
</head>
<body>
	<center><h2>Captura tu número de teléfono</h2></center>
    <center>
	<form method="post">
    	<input type="text" name="num" placeholder="Telefono">
		<input type="submit" name="Guardar"></center>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
