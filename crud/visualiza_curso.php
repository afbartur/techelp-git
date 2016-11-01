<?php
$id= $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cadcurso WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visualizar Curso</h1>
								
</div>			
<div class="row">
<div class="col-md-12">
<div class="col-xs-3 col-sm-1 ">
	<b>ID:</b>
</div>
<div class="col-xs-9 col-sm-11 ">
	<?php echo $resultado[id];?>
</div>
<div class="col-xs-3 col-sm-1 ">
	<b>Nome:</b>
</div>
<div class="col-xs-9 col-sm-11">
	<?php echo $resultado[nome];?>
</div>


</div>

<a href="index.php?link=24"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  