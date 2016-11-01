<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadreserva WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Reservar</h1>
								
			<form class="fume" method="POST" action="index.php?link=42">
  <div class="form-group">
    <label >Usuário:</label>
	<select disabled class="form-control" >
	<option><?php echo $resultado['usuario'] ;?></option>
	</select>
	
    <input type="hidden" class="form-control" value= "<?php echo $resultado['usuario'] ;?>" required name="usuario" >
  </div>
  <div class="form-group">
    <label >Horário Inicio</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['horarioinicio'] ;?>"required name="horarioinicio" >
  </div>
  <div class="form-group">
    <label >Horário Fim</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['horariofim'] ;?>"required name="horariofim">
  </div>
  
 
  
  <div class="form-group">
    <label >Turno</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['turno'] ;?>"required name="turno">
  </div>
  
  <div class="form-group">
    <label >Data</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['data'] ;?>"required name="data">
  </div>
  
  <div class="form-group">
    <label >Local</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['local'] ;?>"required name="local">
  </div>
  
  <div class="form-group">
    <label >Sala</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['sala'] ;?>"required name="sala">
  </div>
  
   <div class="form-group">
    <label >Cruso</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['curso'] ;?>"required name="curso">
  </div>
  
   
  
  
  
  
  
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  