<?php
	session_start();
	if(isset($_SESSION['usuario']))
		header('Location: inicio.php');
?>
<form method="post" >
<label>Usuario</label>
<input type="text" name="usuario"><br>
<label>Contraseña</label>
<input type="password" name="password"><br>
<button type="submit">Enviar</button>
</form>
<?php
if($_POST && $_POST['usuario'] == 'admin' && $_POST['password'] == '123456'){
	$_SESSION['usuario'] = $_POST;
	header('Location: inicio.php');
}elseif($_POST){
	echo 'Datos ingresados incorrectos';
}