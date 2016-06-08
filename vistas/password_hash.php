<!DOCTYPE html>
<html>
<head>
	<title>password hash</title>
</head>
<body>
<div>Crear tu clave</div>
<form method="post" action="password_hash.php">
	<input type="password" name="clave" autofocus>
	<input type="submit">
</form>

<?php
	 $clave = $_POST['clave']; //recibe la clave
	 echo "$clave ";   //muestra la clave
	 $hash = password_hash($clave, PASSWORD_DEFAULT)."\n";  //genera la clave
	 echo $hash;
?>
<?php
$clave = $_POST['clave']; //recibe la clave
if (password_verify('rasmuslerdorf', $clave)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}	
?>

</body>
</html>

