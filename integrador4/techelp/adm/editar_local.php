<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysql_query("SELECT * FROM cadlocal WHERE id = '$id' LIMIT 1 ");
$resultado = mysql_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Local</h1>
								
			<form class="fume" method="POST" action="index.php?link=21">
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label >Sala</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['sala'] ;?>"required name="sala" placeholder="Sala">
  </div>

 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
  <input type="submit" value="Salvar"class="btn btn-lg btn-primary btn-block"></input><br>
 
<a href="index.php?link=18"> <button type="button"  class="btn btn-lg btn-primary btn-block">Pesquisar</button></a>
<br>		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary btn-block">Voltar</button></a>
</form>


       
        
			  