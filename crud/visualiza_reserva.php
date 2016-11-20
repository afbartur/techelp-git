<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadreserva WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visializar Reserva</h1>
								
</div>			
<div class="row">
<div class="col-md-12">
<div class="col-xs-6 col-sm-4 ">
	<b>ID:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[id];?>
</div>
<div class="col-xs-6 col-sm-4 ">
	<b>Usuario:</b>
</div>
<div class="col-xs-6 col-sm-8">
	<?php echo $resultado[usuario];?>
</div>
<div class="col-xs-6 col-sm-4 ">
	<b>Reserva para:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[usuario2];?>
</div>
<div class="col-xs-6 col-sm-4 ">
	<b>Local:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[local];?>
</div>

<div class="col-xs-6 col-sm-4 ">
	<b>Sala:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[sala];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Horário 1:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[horarioinicio];?>
</div>
<div class="col-xs-6 col-sm-4">
	<b>Horário 2:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[horariomeio];?>
</div>
<div class="col-xs-6 col-sm-4">
	<b>Horário 3:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[horariofim];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Equipamento:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[equipamento];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Curso:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[curso];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Turno:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[turno];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Data:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php echo $resultado[data];?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Situação:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
	<?php 
	if($resultado[situacao] == 1){
		echo "Livre";
		
	}?>
	<?php 
	if($resultado[situacao] == 2){
		echo "Reservado";
		
	}?>
	

</div>

<div class="col-xs-6 col-sm-4">
	<b>Criado em:</b>
</div>
<div class="col-xs-6 col-sm-8 ">


	<?php 
	$newDate = date("d-m-Y h:i:s", strtotime($resultado[criado]));
	
	echo ".".$newDate;?>
</div>

<div class="col-xs-6 col-sm-4">
	<b>Modificado em:</b>
</div>
<div class="col-xs-6 col-sm-8 ">
<?php 
	$newDate2 = date("d-m-Y h:i:s", strtotime($resultado[modificado]));
	
	echo ".".$newDate2;?>

</div>



</div>

<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  