<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadusuario WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visualiza Usuário</h1>
								
</div>			
<div class="row">
<div class="col-md-12">
<div class="col-xs-6 col-sm-6 ">
	<b>ID:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo $resultado[id];?>
</div>


<div class="col-xs-6 col-sm-6 ">
	<b>Nome:</b>
</div>
<div class="col-xs-6 col-sm-6">
	<?php echo $resultado[nome];?>
</div>
<div class="col-xs-6 col-sm-6 ">
	<b>CPF:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo $resultado[cpf];?>
</div>
<div class="col-xs-6 col-sm-6 ">
	<b>E-mail:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo $resultado[email];?>
</div>
<div class="col-xs-6 col-sm-6">
	<b>Tipo:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php 
	if($resultado[tipousuario]==1){
		echo "Administrador";
	}
	if($resultado[tipousuario]==2){
		echo "Professor";
	}
	if($resultado[tipousuario]==3){
		echo "Funcionario";
	}
	if($resultado[tipousuario]==4){
		echo "Estagiário";
	}
	if($resultado[tipousuario]==5){
		echo "Monitor";
	}
	
	
	?>
</div>
<!--<div class="col-xs-6 col-sm-6">
	<b>Curso:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo $resultado[curso];?>
</div>-->

<div class="col-xs-6 col-sm-6">
	<b>Criado:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo $resultado[criado];?>
</div>

<div class="col-xs-6 col-sm-6">
	<b>Alterado:</b>
</div>
<div class="col-xs-6 col-sm-6 ">
	<?php echo".". $resultado[modificado];?>
</div>

<div class="col-xs-6 col-sm-6 ">
	<b>Modificado por:</b>
</div>
<div class="col-xs-6 col-sm-6">
	<?php echo $resultado[modificadopor];?>
</div>


</div>

<a href="index.php?link=2"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  