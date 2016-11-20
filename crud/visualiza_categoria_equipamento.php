<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadcategoriaequipamento WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visializar Categorias de Equipamento</h1>
								
</div>			
<div class="row">
<div class="col-md-12">
<div class="col-xs-6 col-sm-2 ">
	<b>ID:</b>
</div>
<div class="col-xs-6 col-sm-10 ">
	<?php echo $resultado[id];?>
</div>
<div class="col-xs-6 col-sm-2 ">
	<b>Nome:</b>
</div>
<div class="col-xs-6 col-sm-10">
	<?php echo $resultado[nome];?>
</div>
<div class="col-xs-6 col-sm-2 ">
	<b>Data de Criação:</b>
</div>
<div class="col-xs-6 col-sm-10 ">
	<?php 
	$newDate2 = date("d-m-Y  h:m:s", strtotime($resultado['criado']));
		
		echo"<td>".$newDate2."</td>";
	
	
	
	
	?>
</div>

<div class="col-xs-6 col-sm-2 ">
	<b>Data de Modificação:</b>
</div>
<div class="col-xs-6 col-sm-10 ">
	<?php 
	$newDate2 = date("d-m-Y  h:m:s", strtotime($resultado['modificado']));
		
		echo"<td>".$newDate2."</td>";
	
	
	
	
	?>
</div>



</div>

<a href="index.php?link=49"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  