<?php
session_start();
session_destroy();

//remove dados

 unset(
  $_SESSION['UsuarioNome'],		
  $_SESSION['UsuarioId'],			
  $_SESSION['UsuarioEmail'],		
  $_SESSION['UsuarioCpf'],			
  $_SESSION['UsuarioSenha'],		
  $_SESSION['UsuarioTipousuario']	
  );
  
  header ("Location: login.php");


?>