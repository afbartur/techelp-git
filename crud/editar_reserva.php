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
			
			<div class="row">
			
  <div class="form-group col-md-3 ">
    <label >Usuário:</label>
	<select disabled class="form-control" >
	<option><?php echo $resultado['usuario'] ;?></option>
	</select>
	
    <input type="hidden" class="form-control" value= "<?php echo $resultado['usuario'] ;?>" required name="usuario" >
  </div>
  
  <div class="form-group col-md-3 ">
    <label >Reserva para:</label>
	
    <input type="text" class="form-control" value= "<?php echo $resultado['usuario2'] ;?>" required name="usuario2" >
  </div>
  
  
  <div class="form-group col-md-3">
    <label >Horário 1</label>
	
	<select class="form-control" name="horarioinicio" required>
		<option>Não selecionado</option>
		<option value="ab" 
		<?php
		if ($resultado['horarioinicio'] == ab){
			echo "selected";
		}
		?>
		
		>AB</option>
		
			            
	</select>
	
    
  </div>
  
  
  
  <div class="form-group col-md-3">
    <label >Horário 2</label>
    
	<select class="form-control" name="horariomeio" required>
		<option>Não selecionado</option>
		<option value="cd" 
		<?php
		if ($resultado['horariomeio'] == cd){
			echo "selected";
		}
		?>
		
		>CD</option>
		
			            
	</select>
	
	
  </div>
  <div class="form-group col-md-3">
    <label >Horário 3</label>
    <select class="form-control" name="horariofim" required>
		<option>Não selecionado</option>
		<option value="ef" 
		<?php
		if ($resultado['horariofim'] == ef){
			echo "selected";
		}
		?>
		
		>EF</option>
		
			            
	</select>
	
	
  </div>
  
 
  
  <div class="form-group col-md-3">
    <label >Turno</label>
	
	<select class="form-control" name="turno" required>
		<option>Não selecionado</option>
		
		<option value="Manhã" 
		<?php
		if ($resultado['turno'] == Manhã){
			echo "selected";
		}
		?>
		
		>Manhã</option>		
		
		<option value="Tarde" 
		<?php
		if ($resultado['turno'] == Tarde){
			echo "selected";
		}
		?>
		
		>Tarde</option>
		
		
		
		<option value="Noite" 
		<?php
		if ($resultado['turno'] == Noite){
			echo "selected";
		}
		?>
		
		>Noite</option>
		
			            
	</select>
	
    
  </div>
  
  <div class="form-group col-md-3">
    <label >Data</label>
    <input type="date" class="form-control" value= "<?php echo $resultado['data'] ;?>"required name="data">
  </div>
  
  <div class="form-group col-md-3">
    <label >Local</label>
	<select class="form-control" name="local">
	<option value="Anexo" 
		<?php
		if ($resultado['local'] == Anexo){
			echo "selected";
		}
		?>
		
		>Anexo</option>
	<option value="Principal" 
		<?php
		if ($resultado['local'] == Principal){
			echo "selected";
		}
		?>
		
		>Principal</option>
	
	</select>
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Sala</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['sala'] ;?>"required name="sala">
  </div>
  
   <div class="form-group col-md-4">
    <label >Cruso</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['curso'] ;?>"required name="curso">
  </div>
  
   <div class="form-group col-md-4">
    <label >Equipamento</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['equipamento'] ;?>"required name="equipamento">
  </div>
  
  
   </div>
  
  
  
  
  
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  