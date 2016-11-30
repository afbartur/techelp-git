<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=13">
  <div class="row">
  <div class="form-group col-md-6">
    <label >Nome</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group col-md-6">
    <label >Situação</label>
	
	<select class="form-control" name="situacao" required>
		<option>Selecione</option>
		<option value="1" 
		<?php
		if ($resultado['situacao'] == 1){
			echo "selected";
		};
		?>
		
		>Livre</option>
		
		<option value="2" 
		<?php if ($resultado['situacao'] == 2){
			echo "selected";
		};
		?>
		>Reservado</option>
		<option value="3" 
		<?php if ($resultado['situacao'] == 3){
			echo "selected";
		};
		?>
		>Emprestado</option>
			            
	</select>
	
	
  </div>
  <div class="form-group col-md-6">
    <label >Descrição</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['descricao'] ;?>"required name="descricao" placeholder="Descrição">
  </div>
    <div class="form-group col-md-6">
    <label >Tombo</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['tombo'] ;?>"required name="tombo" placeholder="Tombo">
  </div>
  <div class="form-group col-md-6">
			<label >Usuário do Sistema</label>
			<input disabled type="text" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			<input type="hidden" value="<?php echo $_SESSION['UsuarioNome'];?>" class="form-control" required name="modificadopor" placeholder="Usuario do Sistema">
			</div>
  </div>
 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=12"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  