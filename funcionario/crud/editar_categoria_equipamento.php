<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadcategoriaequipamento WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Categoria de Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=52">
			
			<div class="row">
			
			<div class="form-group col-md-4">
			<label >Usuário do Sistema</label>
			<input disabled type="text" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			<input type="hidden" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			</div>
  <div class="form-group col-md-8">
    <label >Nome do equipamento</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  </div>
 
  
 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=49"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  