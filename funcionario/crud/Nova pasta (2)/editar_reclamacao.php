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
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label >Situação</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['situacao'] ;?>"required name="situacao" placeholder="Situação">
  </div>
  <div class="form-group">
    <label >Descrição</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['descricao'] ;?>"required name="descricao" placeholder="Descrição">
  </div>
    <div class="form-group">
    <label >Tombo</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['tombo'] ;?>"required name="tombo" placeholder="Tombo">
  </div>
  
 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=12"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  