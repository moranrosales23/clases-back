<?php
session_start();
if(!isset($_SESSION['usuario']))
	header('Location: login.php');
$noticias = isset($_SESSION['noticias']) ? $_SESSION['noticias'] : [];
?>
<a href="salir.php">Salir de sesion</a>
<a href="inicio.php">Inicio</a>
<table>
	<thead style="border: 2px solid #ccc;">
		<tr style="border: 2px solid #ccc;">
			<th>#</th>
			<th>Titulo</th>
			<th>Contenido</th>
		</tr>
	</thead>
	<tbody style="border: 2px solid #ccc;">
		<?php if(count($noticias) > 0) foreach ($noticias as $key => $value) { ?>
			<tr style="border: 2px solid #ccc;">
				<td><?= ($key+1) ?></td>
				<td><?= $value['titulo'] ?></td>
				<td><?= substr($value['contenido'],0,10).'...' ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>