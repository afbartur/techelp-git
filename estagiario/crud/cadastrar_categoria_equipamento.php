<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Cadastrar Categoria de Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=48">
			<div class="row">
			
			
			<div class="form-group col-md-4">
			<label >Usuário do Sistema</label>
			<input disabled type="text" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			<input type="hidden" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			</div>
			
			
  <div class="form-group col-md-8">
    <label >Nome do Equipamento</label>
    <input type="text" class="form-control" required name="nome" placeholder="Nome">
  </div>
   
 
  </div>
   
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=49"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  