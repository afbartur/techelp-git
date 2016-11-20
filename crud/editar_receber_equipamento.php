<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadendregas WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Receber Equipamento </h1>
								
			<form class="fume" method="POST" action="index.php?link=59">
			<div class="row">

    <div class="form-group col-md-4">
    <label >Usuario:</label>
    <input type="text" disabled class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
	<input type="hidden" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group col-md-4">
    <label >Professor:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['nomeprofessor'] ;?>" required name="nomeprofessor" placeholder="Professor">
	
	<input type="hidden"  class="form-control" value= "<?php echo $resultado['nomeprofessor'] ;?>" required name="nomeprofessor" placeholder="Professor">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Equipamento:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['equipamento'] ;?>" required name="equipamento" placeholder="Equipamento">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['equipamento'] ;?>" required name="equipamento" placeholder="Equipamento">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Local:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['local'] ;?>" required name="local" placeholder="Local">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['local'] ;?>" required name="local" placeholder="Local">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Sala:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['sala'] ;?>" required name="sala" placeholder="Sala">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['sala'] ;?>" required name="sala" placeholder="Sala">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Curso:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['curso'] ;?>" required name="curso" placeholder="Curso">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['curso'] ;?>" required name="curso" placeholder="Curso">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Horário 1:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['horario1'] ;?>" required name="horario1" placeholder="Horário1">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['horario1'] ;?>" required name="horario1" placeholder="Horário1">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Horário 2:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['horario2'] ;?>" required name="horario2" placeholder="Horário2">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['horario2'] ;?>" required name="horario2" placeholder="Horário2">
	
	
  </div>
  
  <div class="form-group col-md-4">
    <label >Horário 3:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['horario3'] ;?>" required name="horario3" placeholder="Horário3">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['horario3'] ;?>" required name="horario3" placeholder="Horário3">
	
	
  </div>
  <div class="form-group col-md-4">
    <label >Turno:</label>
	<input type="text" disabled class="form-control" value= "<?php echo $resultado['turno'] ;?>" required name="turno" placeholder="turno">
	
	<input type="hidden" class="form-control" value= "<?php echo $resultado['turno'] ;?>" required name="turno" placeholder="Turno">
	
	
  </div>
  
  
 
    <div class="form-group col-md-4 ">
    <label >Data da Entrega:</label>
    <input disabled type="date" class="form-control" value= "<?php echo $resultado['dataentrega'] ;?>"required name="dataentrega" placeholder="Data da Entrega">
	<input type="hidden" class="form-control" value= "<?php echo $resultado['dataentrega'] ;?>"required name="dataentrega" placeholder="Data da Entrega">
  </div>
  
   <div class="form-group col-md-4 ">
    <label >Previsão de Devolução:</label>
    <input disabled type="date" class="form-control" value= "<?php echo $resultado['dataprevista'] ;?>"required name="dataprevista" placeholder="Data da Entrega">
	<input  type="hidden" class="form-control" value= "<?php echo $resultado['dataprevista'] ;?>"required name="dataprevista" placeholder="Data da Entrega">
  </div>
  
  <div class="form-group col-md-4">
    <label >Data de Recebimento:</label>
    <input type="date" class="form-control" value= "<?php echo $resultado['datarecebido'] ;?>"required name="datarecebido" placeholder="Data de Recebimento">
  </div> 

 <div class="form-group col-md-4">
    <label >Situação:</label>
	<select  class="form-control" name="situacao">
		<option>Selecione</option>
		
		
		<option value="Recebido" 
		<?php
		if ($resultado['situacao'] == "Recebido"){
			echo "selected";
		};
		?>
		
		>Recebido</option>
	

	</select>
	
   
  </div>  
  
 
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  </div>
  
  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=62"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  