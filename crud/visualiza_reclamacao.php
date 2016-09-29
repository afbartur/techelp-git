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
<div class="col-xs-3 col-sm-1 ">
	<b>Reclamação:</b>
</div>
<div class="col-xs-9 col-sm-11 ">
	<?php echo $resultado[descricao];?>
</div>

<div class="col-xs-3 col-sm-1 ">
	<b>Titulo:</b>
</div>
<div class="col-xs-9 col-sm-11 ">
	<?php echo $resultado[titulo];?>
</div>
<div class="col-xs-3 col-sm-1 ">
	<b>Data:</b>
</div>
<div class="col-xs-9 col-sm-11 ">
	<?php echo $resultado[criado];?>
</div>


<div class="col-xs-3 col-sm-1 ">
	<b>Foto:</b>
</div>
<div class="col-xs-9 col-sm-11">
	<a href="" name="imagem"> <img  class="img-responsive margin50" SRC="fotos/<?php echo $resultado[foto];?>" HEIGHT="300" WIDTH="300" ></a>
</div>
</div>

<a href="index.php?link=32"> <button type="button"  class="btn btn-lg btn-primary margin40"><i class="fa fa-reply "></i> Voltar</button></a>

</div>

</div>

</div>

       
        
			  