
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
	   
	  <div class="navbar-header">
	  
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		  
          
          
        
            
			<img class=" imgmob" src="imagens/favicon.ico"></img>
            
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
       
	   
	   
	   
        <div id="navbar" class="navbar-collapse collapse fontemenu">
		
          <ul class="nav navbar-nav">
		 <div class="navbar-header">
		<a  class=" img-responsive" href="index.php"><img src="imagens/favicon.ico"></img></a>
		 </div>
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Início</a></li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Reservas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?link=39">Realizar Reserva</a></li>
                <li><a href="index.php?link=38">Listar Reserva</a></li>
				
              </ul>
            </li>
           
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" 
			  data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text" aria-hidden="true"></i>Relatório <span class="caret"></span></a>
              <ul class="dropdown-menu">
               
                <li><a href="index.php?link=69"> Reserva</a></li>
				
				<li><a href="index.php?link=70"> Empréstimo</a></li>
              </ul>
            </li>
           			
          </ul>
		  <p class="text-right">
			<?php
			echo "Olá " . $_SESSION['UsuarioNome'];
			?>
			<br>
			<a href="index.php?link=71&id=<?php echo $_SESSION['UsuarioId']; ?>"> <i class="fa fa-lock" aria-hidden="true"></i> Trocar Senha</a>
			<a href="sair.php"><i class="fa fa-sign-in " aria-hidden="true"></i> Sair</a>
			</p>
        </div><!--/.nav-collapse -->
		
      </div>
    </nav>