<?php
include_once("seguranca.php");
?>
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
	  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-header">
          
          <a  class=" btn-block" href="index.php"><img src="imagens/favicon.ico"></img></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse fontemenu">
          <ul class="nav navbar-nav transition">
            <li><a href="index.php">Início</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?link=3">Cadastrar de Usuário</a></li>
                <li><a href="index.php?link=10">Cadastrar de Equipamento</a></li>
                <li><a href="index.php?link=16">Cadastrar de Local</a></li>
                <li><a href="index.php?link=25">Cadastrar de Curso</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Reservas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Realizar Reserva</a></li>
                <li><a href="#">Listar Reserva</a></li>
              </ul>
            </li>
            <li><a href="index.php?link=32">Atender Reclamações</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Relatório <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Relatório de Equipamento</a></li>
                <li><a href="index.php?link=2">Relatório de Usurário</a></li>
                <li><a href="#">Relarório de Reserva</a></li>
              </ul>
            </li>
           			</ul>
					
					<ul class="nav navbar-nav" > 
          
		  
		  <li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">
			  
			  <?php
			echo "Olá, " . $_SESSION['UsuarioNome'];
			?> <span class="caret"></span></a>
			
              <ul class="dropdown-menu">
			  <li><a href="sair.php"><i class="fa fa-sign-in " aria-hidden="true"></i> Mudar Senha</a></li>
			  <li><a href="sair.php"><i class="fa fa-sign-in " aria-hidden="true"></i> Sair</a></li>
			   
                
                
              </ul>
            </li>
			
			</ul>		
			
        </div><!--/.nav-collapse -->
		
      </div>
    </nav>