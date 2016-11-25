<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadendregas WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Emprestimo de Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=65">
			<div class="row">

    <div class="form-group col-md-4">
    <label >Usuario:</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group col-md-4">
    <label >Professor:</label>
	<input type="text" class="form-control" value= "<?php echo $resultado['nomeprofessor'] ;?>" required name="nomeprofessor" placeholder="Professor">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Equipamento:</label>
	<input type="text" class="form-control" value= "<?php echo $resultado['equipamento'] ;?>" required name="equipamento" placeholder="Equipamento">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Situação:</label>
	<select class="form-control" name="situacao">
		<option>Selecione</option>
		<option value="Emprestado" 
		<?php
		if ($resultado['situacao'] == "Emprestado"){
			echo "selected";
		};
		?>
		
		>Emprestado</option>
		
		<option value="Recebido" 
		<?php
		if ($resultado['situacao'] == "Recebido"){
			echo "selected";
		};
		?>
		
		>Recebido</option>
	

	</select>
	
   
  </div>
    <div class="form-group col-md-4 ">
    <label >Data da Entrega:</label>
    <input type="date" class="form-control" value= "<?php echo $resultado['dataentrega'] ;?>"required name="dataentrega" placeholder="Data da Entrega">
  </div>
  
   <div class="form-group col-md-4 ">
    <label >Previsão de Devolução:</label>
    <input type="date" class="form-control" value= "<?php echo $resultado['dataprevista'] ;?>"required name="dataprevista" placeholder="Data da Entrega">
  </div>
  
  <div class="form-group col-md-4">
    <label >Data de Recebimento:</label>
    <input type="date" class="form-control" value= "<?php echo $resultado['datarecebido'] ;?>" name="datarecebido" placeholder="Data de Recebimento">
  </div> 	
  
  <div class="form-group col-md-4">
    <label >Local:</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['local'] ;?>"required name="local" placeholder="Local">
  </div> 
  
  <div class="form-group col-md-4">
    <label >Sala:</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['sala'] ;?>"required name="sala" placeholder="Sala">
  </div> 
  <div class="form-group col-md-4">
    <label >Curso:</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['curso'] ;?>"required name="curso" placeholder="Curso">
  </div> 
  
  <div class="form-group col-md-4">
    <label >Horário 1:</label>
    
	<select class="form-control" name="horario1" required>
		<option>Não Selecionado</option>
		<option value="ab" 
		<?php
		if ($resultado['horario1'] == ab){
			echo "selected";
		}
		?>
		
		>AB</option>
		
			            
	</select>
	
	
	
	
  </div> 
  
  <div class="form-group col-md-4">
    <label >Horário 2:</label>
    
	<select class="form-control" name="horario2" required>
		<option>Não Selecionado</option>
		<option value="cd" 
		<?php
		if ($resultado['horario2'] == cd){
			echo "selected";
		}
		?>
		
		>CD</option>
		
			            
	</select>
	
	
  </div> 
  
  <div class="form-group col-md-4">
    <label >Horário 3:</label>
   <select class="form-control" name="horario3" required>
		<option>Não Selecionado</option>
		<option value="ef" 
		<?php
		if ($resultado['horario3'] == ef){
			echo "selected";
		}
		?>
		
		>EF</option>
		
			            
	</select>
   
   
   
  </div> 
  
  <div class="form-group col-md-4">
    <label >Turno:</label>
   <select class="form-control" name="turno" required>
		<option>Não Selecionado</option>
		
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
  
 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  </div>
  
  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=56"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  