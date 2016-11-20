<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadendregas WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visualizar Emprestimo de Equipamento</h1>
								
</div>			
<div class="row">
<div class="col-md-12">
<div class="col-xs-8 col-sm-3 ">
	<b>ID:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo $resultado[id];?>
</div>
<div class="col-xs-8 col-sm-3 ">
	<b>Usuário do sistema:</b>
</div>
<div class="col-xs-4 col-sm-9">
	<?php echo $resultado[nome];?>
</div>
<div class="col-xs-8 col-sm-3 ">
	<b>Professor:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo $resultado[nomeprofessor];?>
</div>
<div class="col-xs-8 col-sm-3 ">
	<b>Equipamento:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo $resultado[equipamento];?>
</div>


<div class="col-xs-8 col-sm-3">
	<b>Situação:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo $resultado[situacao];?>
</div>

<div class="col-xs-8 col-sm-3">
	<b>Data da entrega:</b>
</div>
<div class="col-xs-4 col-sm-9 ">

	<?php 
	$newDate = date("d-m-Y  h:m:s", strtotime($resultado[dataentrega]));
	echo $newDate;?>
</div>

<div class="col-xs-8 col-sm-3">
	<b>Previsão de Entrega:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php 
	
	
	$newDate2 = date("d-m-Y  h:m:s", strtotime($resultado[dataprevista]));
	echo $newDate2;
	?>
	
</div>

<div class="col-xs-8 col-sm-3">
	<b>Data de Recebimento:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo ".". 
	
	$resultado[datarecebido];
	
	
	
	
	?>
</div>

<div class="col-xs-8 col-sm-3">
	<b>Data de Criação do Protocolo:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php 
	
	$newDate4 = date("d-m-Y  h:m:s", strtotime($resultado[criado]));
	echo $newDate4;
	
	?>
</div>

<div class="col-xs-8 col-sm-3">
	<b>Data de Alteração do Protocolo:</b>
</div>
<div class="col-xs-4 col-sm-9 ">
	<?php echo".". $resultado[modificado];?>
</div>





</div>

<a href="index.php?link=56"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  