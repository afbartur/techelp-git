<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadreclamacao WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visualizar Reclamação</h1>
								
</div>			
<div class="row">
<div class="col-xs-4 col-sm-2 ">
	<b>Titulo:</b>
</div>
<div class="col-xs-8 col-sm-10 ">
	<?php echo $resultado[titulo];?>
</div>

<div class="col-xs-4 col-sm-2 ">
	<b>Reclamação:</b>
</div>
<div class="col-xs-8 col-sm-10 ">
	<?php echo $resultado[descricao];?>
</div>


<div class="col-xs-4 col-sm-2 ">
	<b>Data da Reclamação:</b>
</div>
<div class="col-xs-8 col-sm-10 ">
	<?php 
	
	$newDate = date("d-m-Y  h:i:s", strtotime($resultado[criado]));
		
		echo":". $newDate ;
	
	?>
</div>


<div class="col-xs-4 col-sm-2 ">
	<b>Modificado</b>
</div>
<div class="col-xs-8 col-sm-10 ">
	<?php 
	
	$newDate2 = date("d-m-Y  h:m:s", strtotime($resultado[modificado]));
		
		echo":". $newDate2 ;
	
	?>
</div>


<div class="col-xs-4 col-sm-2 ">
	<b>Foto:</b>
</div>
<div class="col-xs-8 col-sm-10">

<button type="button" class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal1-lg">
Ver Imagem</button>

<div class="modal fade bs-example-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
	  <a href="" name="imagem"> <img  class="img-responsive center-block" SRC="fotos/<?php echo $resultado[foto];?>"  ></a>
	  
	  
	
</div>
</div>
</div>
</div>



<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadreclamacao WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
     								
		 
  
 
 
  
  

<form method="POST" action="index.php?link=35" >

<div class="col-xs-4 col-sm-2 ">
	<b>Atendimento:</b>
	
</div>
<div class="col-xs-4 col-sm-4">
	 <input type="text" class="form-control"   value= "<?php echo $resultado['atendimento'] ;?>" name="atendimento">
	 </input>
</div>

</div>
</div>
</div>


 <select class="btn btn-lg btn-primary butao2" name="situacao" required>
		<option>Selecione</option>
		<option value="1" 
		<?php
		if ($resultado['situacao'] == 1){
			echo "selected";
		}
		?>
		
		>Recebido</option>
		<option value="2" 
		<?php if ($resultado['situacao'] == 2){
			echo "selected";
		}
		?>
		
		
		>Em Análise</option>
		<option value="3" 
		<?php if ($resultado['situacao'] == 3){
			echo "selected";
		}
		?>
		>Resolvido</option>
		            
	</select>
	 <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
	<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-1x"></i> Salvar</button>
</form>
<a href="index.php?link=32"> <button type="button"  class="btn btn-lg btn-primary butao1"><i class="fa fa-reply "></i> Voltar</button></a>
</div>


       
        
			  