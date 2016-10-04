<?php
$id= $_GET['id'];
$result = mysql_query("SELECT * FROM cadreclamacao WHERE id = '$id' LIMIT 1 ");
$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visializa Reclamação</h1>
								
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
	<?php echo $resultado[criado];?>
</div>


<div class="col-xs-4 col-sm-2 ">
	<b>Modificado:</b>
</div>
<div class="col-xs-8 col-sm-10 ">
	<?php echo $resultado[modificado];?>
</div>


<div class="col-xs-4 col-sm-4 ">
	<b>Foto:</b>
</div>
<div class="col-xs-8 col-sm-8">
	<a href="" name="imagem"> <img  class="img-responsive margin50" SRC="fotos/<?php echo $resultado[foto];?>" HEIGHT="300" WIDTH="300" ></a>
</div>
</div>



<?php
$id= $_GET['id'];
$result = mysql_query("SELECT * FROM cadreclamacao WHERE id = '$id' LIMIT 1 ");
$resultado = mysql_fetch_assoc($result);
?>
     								
		 
  
 
 
  
  

<form method="POST" action="index.php?link=35" >



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
<form>
<a href="index.php?link=32"> <button type="button"  class="btn btn-lg btn-primary butao1"><i class="fa fa-reply "></i> Voltar</button></a>
</div>

</div>

</div>

       
        
			  