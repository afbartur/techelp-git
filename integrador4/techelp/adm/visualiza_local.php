﻿<?php
$id= $_GET['id'];
$result = mysql_query("SELECT * FROM cadlocal WHERE id = '$id' LIMIT 1 ");
$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
<div class="page-header">       
	   <h1 class="text-center">Visualizar Local</h1>
								
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
<div class="col-xs-3 col-sm-1 ">
	<b>Sala:</b>
</div>
<div class="col-xs-9 col-sm-11 ">
	<?php echo $resultado[sala];?>
</div>


</div>

<a href="index.php?link=18"> <button type="button"  class="btn btn-lg btn-primary btn-block">Voltar</button></a>

</div>

</div>

</div>

       
        
			  