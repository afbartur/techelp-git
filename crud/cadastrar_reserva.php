<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Realizar Reserva</h1>
		
		<div class="row">
		

							
			<form class="fume  " method="POST" action="index.php?link=37">
			
			<div class="row">
			
			<div class="form-group col-md-3">
			
			<label >Usuário:</label>
			<select disabled class="form-control" >
			<option><?php
			echo $_SESSION['UsuarioNome'];
			?></option>
			</select>
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['UsuarioNome'];	?>">

			</div>
			
			 <div class="form-group col-md-3">
				<label >Reserva para: </label>    
				<SELECT class="form-control" name="usuario2" >
				<option><?php
			echo $_SESSION['UsuarioNome'];
			?></option>
			<?php
				//$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE situacao = 1" );
				$resultado = mysqli_query($conn, "SELECT * FROM cadusuario" );
				$linhas=mysqli_num_rows($resultado);
				
				While($registro=mysqli_fetch_array($resultado))
					{
			?>	
					<option> 
					<?php
					
					print "$registro[nome]";
						
							
					?> 
					</option>
				
					<?php
					}
					
					mysqli_free_result($resultado);

					?>

			</SELECT> 
			
			</div>
			
  <div class="form-group col-md-3">
    <label >Horário 1 </label>    
	 <select name="horarioinicio" class="form-control" >
	<option>Não selecionado</option>
	<option value="ab">AB</option>
	
	</select>  
	
  </div>
  
  <div class="form-group col-md-3">
    <label >Horário 2 </label>    
	 <select name="horariomeio" class="form-control" >
	<option>Não selecionado</option>
	<option value="cd">CD</option>
	
	</select>  
	
  </div>
  
  
  
  
  
   <div class="form-group col-md-3">
    <label >Horário 3</label>
	<select name="horariofim" class="form-control" >
	<option>Não selecionado</option>
	<option value="ef">EF</option>
	
	</select>
	


</td>


   
	
  
  
  
  </div>
  <div class="form-group col-md-3">
    <label >Turno</label>
	<select class="form-control" name="turno"> 
		<option>Selecione</option>
		<option value="Manhã">Manhã</option>
		<option value="Tarde">Tarde</option>
		<option value="Noite">Noite</option>
		
	</select>
    
  </div>
    <div class="form-group col-md-3">
    <label >Data</label>
	<input class="form-control" name="data" type="date" required placeholder="Digite a Data"  />
      </div>
  <div class="form-group col-md-3">
    <label >Local</label>
	 	 <SELECT class="form-control" name="local" size="1">
	<option> Selecione</option>
		<option value="Anexo"> 
		 Anexo
		</option>
		<option value="Principal"> 
		 Principal
		</option>
	
		

</SELECT>
		 
	
    
  </div>
  
  <div class="form-group col-md-4">
    <label >Sala</label>
	 <SELECT class="form-control" name="sala" size="1">
	<option> Selecione</option>
<?php
	$resultado = mysqli_query($conn, "SELECT sala FROM cadlocal" );
	$linhas=mysqli_num_rows($resultado);
	
	While($registro=mysqli_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		print "$registro[sala]"
		?> 
		</option>
	
		<?php
		}
		mysql_free_result($resultado);

		?>

</SELECT>
	 
    
  </div>
  <div class="form-group col-md-4">
    <label >Curso</label>
	 <SELECT class="form-control" name="curso" size="1">
	<option> Selecione</option>
<?php
	$resultado = mysqli_query($conn,"SELECT nome FROM cadcurso" );
	$linhas=mysqli_num_rows($resultado);
	
	While($registro=mysqli_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		print "$registro[nome]"
		?> 
		</option>
	
		<?php
		}
		mysqli_free_result($resultado);

		?>

</SELECT>
	 
    
  </div>
  
	
	<div class="form-group col-md-4">
	<label >Pesquisar Equipamento</label>
	<SELECT class="form-control" name="equipamento" size="1">
	<option> Selecione</option>
<?php
	//$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE situacao = 1" );
	$resultado = mysqli_query($conn, "SELECT * FROM cadcategoriaequipamento" );
	$linhas=mysqli_num_rows($resultado);
	
	While($registro=mysqli_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		
		print "$registro[nome]";
			
				
		?> 
		</option>
	
		<?php
		}
		
		mysqli_free_result($resultado);

		?>

</SELECT>
	
  
  
  </div>
  </div>
 </div>
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
	
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  