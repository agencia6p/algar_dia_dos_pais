<?php
session_start();
if (isset($_SESSION["sessaoPainel"])){
    $login_usuario = $_SESSION["sessaoPainel"];
}
else{
	echo '<script>alert("Login primeiro! Tranquilo?!"); history.go(-1);</script>';
	exit();/* caso nao tinha session... quer dizer.. ele nao logou */
}
?>