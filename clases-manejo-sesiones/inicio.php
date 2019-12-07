<?php
session_start();
if(!isset($_SESSION['usuario']))
	header('Location: login.php');
?>
<!-- Aqui inicializa el formulario -->
<a href="salir.php">Salir de sesion</a>
<h3>Hola <?= $_SESSION['usuario']['usuario'] ?></h3>
<form method="post" >
	<label>Titulo</label>
	<input type="text" name="titulo"><br>
	<label>Contenido</label>
	<textarea name="contenido"></textarea><br>
	<button type="submit">Enviar</button>
</form>
<hr>
<a href="noticias.php">Ir a noticias</a>

<!-- Aqui finaliza el formulario -->
<?php
if($_POST){
	$noticias = isset($_SESSION['noticias']) ? $_SESSION['noticias'] : [];
	$noticia = $_POST;
	array_push($noticias, $noticia);
	$_SESSION['noticias'] = $noticias;
	header('Location: inicio.php');
}