<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Cadastrar Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=9">
			<div class="row">
  <div class="form-group col-md-6">
    <label >Nome</label>
    <input type="text" class="form-control" required name="nome" placeholder="Nome">
  </div>
   
  <div class="form-group col-md-6">
    <label >Situação</label>
	<select name="situacao" class="form-control">
	<option value="1">Livre</option>
	<option value="2">Reservado</option>
	</select>
	
  </div>
  <div class="form-group col-md-6">
    <label >Descrição</label>
    <input type="text" class="form-control" required name="descricao" placeholder="Descrição">
  </div>
  <div class="form-group col-md-6">
    <label >Tombo</label>
	 <input class="form-control" name="tombo" type="text" required  placeholder="Tombo" />
    
  </div>
  </div>
   
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=12"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  