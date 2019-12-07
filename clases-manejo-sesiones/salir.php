<?php
session_start();
if(!isset($_SESSION['usuario']))
	header('Location: login.php');
unset($_SESSION['usuario']);
unset($_SESSION['noticias']);
header('Location: login.php');