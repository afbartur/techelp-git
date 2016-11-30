<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Cadastrar Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=9">
			<div class="row">
			
  <div class="form-group col-md-6">
    <label >Nome / Categoria de Equipamento</label>
    <SELECT class="form-control" name="nome" size="1">
	
<?php
	//$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE situacao = 1" );
	$resultado = mysqli_query($conn, "SELECT * FROM cadcategoriaequipamento" );
	$linhas=mysqli_num_rows($resultado);
	
	While($registro=mysqli_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		
		print "$registro[nome]";
			
				
		?> 
		</option>
	
		<?php
		}
		
		mysqli_free_result($resultado);

		?>

</SELECT>
  </div>
  
  <div class="form-group col-md-6">
    <label >Tombo</label>
	 <input class="form-control" name="tombo" type="text" required  placeholder="Tombo" />
    
  </div>
  
   
  <div class="form-group col-md-6">
    <label >Situação</label>
	<select name="situacao" class="form-control">
	<option value="1">Livre</option>
	<option value="2">Reservado</option>
	<option value="3">Emprestado</option>
	</select>
	
  </div>
  <div class="form-group col-md-6">
    <label >Descrição</label>
    <input type="text" class="form-control" required name="descricao" placeholder="Descrição">
  </div>
  
  
  <div class="form-group col-md-6">
			<label >Usuário do Sistema</label>
			<input disabled type="text" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			<input type="hidden" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			</div>
  
  </div>
   
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=12"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  