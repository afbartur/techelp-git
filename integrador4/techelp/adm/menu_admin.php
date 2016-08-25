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
          
          <a  href="index.php"><img src="imagens/favicon.ico"></img></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Início</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?link=3">Cadastrar de Usuário</a></li>
                <li><a href="#">Cadastrar de Equipamento</a></li>
                <li><a href="#">Cadastrar de Local</a></li>
                <li><a href="#">Cadastrar de Curso</a></li>
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
            <li><a href="#about">Atender Reclamações</a></li>
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
		  <p class="text-right">
			<?php
			echo "Bem vindo ao Administrativo " . $_SESSION['UsuarioNome'];
			?>
			<br>
			<a href="sair.php">Sair</a>
			</p>
        </div><!--/.nav-collapse -->
		
      </div>
    </nav>