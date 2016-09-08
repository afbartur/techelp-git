<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Cadastrar Local</h1>
								
			<form class="fume" method="POST" action="index.php?link=17">
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" required name="nome" placeholder="Nome">
  </div>
   
  <div class="form-group">
    <label >Sala</label>
	<input  class="form-control" name="sala" type="text" required placeholder="Sala" />
  </div>
    
   
  
  <input type="submit" value="Salvar"class="btn btn-lg btn-primary btn-block"></input><br>
 
<a href="index.php?link=18"> <button type="button"  class="btn btn-lg btn-primary btn-block">Pesquisar</button></a>
<br>		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary btn-block">Voltar</button></a>
</form>


       
        
			  