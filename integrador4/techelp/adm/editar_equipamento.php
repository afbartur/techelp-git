<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysql_query("SELECT * FROM cadequipamento WHERE id = '$id' LIMIT 1 ");
$resultado = mysql_fetch_assoc($result);
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
  
  
  
  <input type="submit" value="Salvar"class="btn btn-lg btn-primary btn-block"></input><br>
 
<a href="index.php?link=12"> <button type="button"  class="btn btn-lg btn-primary btn-block">Pesquisar</button></a>
<br>		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary btn-block">Voltar</button></a>
</form>


       
        
			  