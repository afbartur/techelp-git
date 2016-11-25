<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Realizar Reserva</h1>
		
		
		<div class="row">
		
<?php
							
							?>
			<form class="fume  " method="POST" >
			
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
	<option value="" >Não selecionado</option>
	<option value="ab">AB</option>
	
	</select>  
	
  </div>
  
  <div class="form-group col-md-3">
    <label >Horário 2 </label>    
	 <select name="horariomeio" class="form-control" >
	<option value="" >Não selecionado</option>
	<option value="cd">CD</option>
	
	</select>  
	
  </div>
  
  
  
  
  
   <div class="form-group col-md-3">
    <label >Horário 3</label>
	<select name="horariofim" class="form-control" >
	<option value="" >Não selecionado</option>
	<option value="ef">EF</option>
	
	</select>
	


</td>


   
	
  
  
  
  </div>
  <div class="form-group col-md-3">
    <label >Turno</label>
	<select class="form-control" name="turno"> 
		<option value="">Selecione</option>
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
	<option value="" > Selecione</option>
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
	<option value="" > Selecione</option>
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
	<option value=""> Selecione</option>
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
	<option value="" > Selecione</option>
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
<button type="submit" data-toggle="modal" data-target=".bs-example-modal1-lg" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
	
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>
<?php

		$equipamento = $_POST['equipamento'];
		$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE nome LIKE '%$equipamento%'" );
		$linhas1 =mysqli_num_rows($resultado);

		
		$horario3 = $_POST['horariofim'];
		$horario2 = $_POST['horariomeio'];
		$horario1 = $_POST['horarioinicio'];
		$turno = $_POST['turno'];
		$data = $_POST['data'];
		$equipamento = $_POST['equipamento'];
		$resultado = mysqli_query($conn, "SELECT * FROM cadreserva WHERE data LIKE '%$data%' AND turno LIKE '%$turno%' AND horariofim LIKE '%$horario3%' AND horariomeio LIKE '%$horario2%' AND horarioinicio LIKE '%$horario1%' AND equipamento LIKE '%$equipamento%' ");
		echo $linhas2 =mysqli_num_rows($resultado);

		if($linhas1=$linhas2){
			echo "Reserva Não Permitia para o Horário e data escolhidos";
		}else{
			echo "Reserva Permitida";
			
			?>
			
			
	<div class="modal fade bs-example-modal1-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-lg" role="document">
					
					
					<div class="modal-content">
			<div style="background-color: #1E90FF" >
			<h1 class="text-center">Confirmação de Dados</h1>
			
			<form class="fume  " method="POST"   action="index.php?link=37" style="background-color: #1E90FF" >
			
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
			<input disabled class="form-control" name="usuario2" value="<?php echo $_POST['usuario2'];?>" type="text" required  />
			<input class="form-control" name="usuario2" value="<?php echo $_POST['usuario2'];?>" type="hidden" required  />
				
				
			
			</div>
			
					  <div class="form-group col-md-3">
						<label >Horário 1 </label>

						<input disabled class="form-control" name="horarioinicio" value="<?php echo $_POST['horarioinicio'];?>" type="text" required  />
						<input class="form-control" name="horarioinicio" value="<?php echo $_POST['horarioinicio'];?>" type="hidden" required  />
						
						
					  </div>
					  
					  <div class="form-group col-md-3">
						<label >Horário 2 </label>
						<input disabled class="form-control" name="horariomeio" value="<?php echo $_POST['horariomeio'];?>" type="text" required  />
						<input class="form-control" name="horariomeio" value="<?php echo $_POST['horariomeio'];?>" type="hidden" required  />
						
					  </div>
					  
					  
					  
					  
					  
					   <div class="form-group col-md-3">
						<label >Horário 3</label>
						
						<input disabled class="form-control" name="horariofim" value="<?php echo $_POST['horariofim'];?>" type="text" required  />
						<input class="form-control" name="horariofim" value="<?php echo $_POST['horariofim'];?>" type="hidden" required  />
							


					</td>


					   
						
					  
					  
					  
					  </div>
					  <div class="form-group col-md-3">
						<label >Turno</label>
						<input disabled class="form-control" name="turno" value="<?php echo $_POST['turno'];?>" type="text" required  />
						<input class="form-control" name="turno" value="<?php echo $_POST['turno'];?>" type="hidden" required  />
					</div>
						
					 
						<div class="form-group col-md-3">
						<label >Data</label>
						<input disabled class="form-control" name="data" value="<?php echo $_POST['data'];?>" type="text" required  />
						<input class="form-control" name="data" value="<?php echo $_POST['data'];?>" type="hidden" required  />
						</div>
						  
						  
					  <div class="form-group col-md-3">
						<label >Local</label>
							 
						<input disabled class="form-control" name="local" value="<?php echo $_POST['local'];?>" type="text" required   />
						<input class="form-control" name="local" value="<?php echo $_POST['local'];?>" type="hidden" required   />	
						
						
					  </div>
					  
					  <div class="form-group col-md-4">
						<label >Sala</label>
						 
						 <input disabled class="form-control" name="sala" value="<?php echo $_POST['sala'];?>" type="text" required   />
						 <input class="form-control" name="sala" value="<?php echo $_POST['sala'];?>" type="hidden" required   />
						
					  </div>
					  <div class="form-group col-md-4">
						<label >Curso</label>
						<input class="form-control" name="curso" value="<?php echo $_POST['curso'];?>" type="hidden" required   />
						 <input disabled class="form-control" name="curso" value="<?php echo $_POST['curso'];?>" type="text" required   />
						 
						
					  </div>
					  
						
						<div class="form-group col-md-4">
						<label >Equipamento</label>
						
						<input disabled class="form-control" name="equipamento" value="<?php echo $_POST['equipamento'];?>" type="text" required   />
						<input class="form-control" name="equipamento" value="<?php echo $_POST['equipamento'];?>" type="hidden" required   />
					  
					  
					  </div>
					  
					  
					  
					  <button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-check fa-2x" aria-hidden="true"></i> Confirmar Reserva</button>
					 

						
					<a href="index.php?link=39"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>

					</form>
					  
				</div>
			</div>
		</div>
</div>
</div>
					
							
			
			
			
			
			<?php
		}
		
		
?>

       
        
			  