<?php
session_start();
include_once("seguranca.php");
echo "Bem vindo Usuário: " .$_SESSION['UsuarioNome'];
?>
</br>
<a href="sair.php">Sair</a>