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
    
   
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=18"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  