<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Emprestar Equipamento</h1>
								
			<form class="fume" method="POST" action="index.php?link=55">
			<div class="row">
			
			<div class="form-group col-md-4">
			
			<label >Usuário:</label>
			<select disabled class="form-control" >
			<option><?php
			echo $_SESSION['UsuarioNome'];
			?></option>
			</select>
			<input type="hidden" name="nome" value="<?php echo $_SESSION['UsuarioNome'];	?>">

			</div>
			
			
			<div class="form-group col-md-4">
				<label >Professor</label>
				<SELECT class="form-control" name="nomeprofessor" >
					<option>Selecione</option>
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
			
			
			
			
			
			  <div class="form-group col-md-4">
				<label >Equipamento</label>
				<SELECT class="form-control" name="equipamento" >
				<option>Selecione</option>
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
   
     <div class="form-group col-md-4">
    <label >Situação</label>
	<select name="situacao" class="form-control">
	<option >Selecione</option>
	<option value="Emprestado">Emprestado</option>
	<option value="Recebido">Recebido</option>
	</select>
	
  </div>

  
  <div class="form-group col-md-4">
    <label >Data de Entrega</label>
    <input disabled type="text" value="<?php echo date('d-m-o');  ?>" class="form-control" required name="dataentrega" >
	<input type="hidden" value="<?php echo date('d-m-o');  ?>" class="form-control" required name="dataentrega" >
  </div>
  
   <div class="form-group col-md-4">
    <label >Data Prevista de Devolução</label>
    <input disabled type="text" value="<?php echo date('d-m-o');  ?>"class="form-control" required name="dataprevista" >
	<input type="hidden" value="<?php echo date('d-m-o');  ?>"class="form-control" required name="dataprevista" >
  </div>
  
  <div class="form-group col-md-4">
    <label >Data de Recebimento</label>
	 <input disabled class="form-control" name="datarecebido" type="" required   />
    
  </div>
  
  <div class="form-group col-md-4">
				<label >Local</label>
				<SELECT class="form-control" name="local" >
				<option>Selecione</option>
				<option value="Anexo">Anexo</option>	
				<option value="Principal">Principal</option>
				</SELECT>
			  </div>
			  
			  
			  <div class="form-group col-md-4">
				<label >Sala</label>
				<SELECT class="form-control" name="sala" >
				<option>Selecione</option>
					<?php
				//$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE situacao = 1" );
				$resultado = mysqli_query($conn, "SELECT * FROM cadlocal" );
				$linhas=mysqli_num_rows($resultado);
				
				While($registro=mysqli_fetch_array($resultado))
					{
					?>	
					<option> 
					<?php
					
					print "$registro[sala]";
						
							
					?> 
					</option>
				
					<?php
					}
					
					mysqli_free_result($resultado);

					?>

					</SELECT>
			  </div>
			  
			 
			  
			  <div class="form-group col-md-4">
				<label >Horário 1</label>
				<SELECT class="form-control" name="horario1" >
				<option>Não Selecionado</option>
				<option value="ab">AB</option>
					

					</SELECT>
			  </div>
			  
			  <div class="form-group col-md-4">
				<label >Horário 2</label>
				<SELECT class="form-control" name="horario2" >
				<option>Não Selecionado</option>
				<option value="cd">CD</option>
					

					</SELECT>
			  </div>
			  
			  <div class="form-group col-md-4">
				<label >Horário 3</label>
				<SELECT class="form-control" name="horario3" >
				<option>Não Selecionado</option>
				<option value="ef">EF</option>
					

					</SELECT>
			  </div>
			  
			   <div class="form-group col-md-4">
				<label >Curso</label>
				<SELECT class="form-control" name="curso" >
				<option>Selecione</option>
					<?php
				//$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE situacao = 1" );
				$resultado = mysqli_query($conn, "SELECT * FROM cadcurso" );
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
			  
			  <div class="form-group col-md-4">
				<label >Turno</label>
				<SELECT class="form-control" name="turno" >
				<option>Selecione</option>
				<option value="Manhã">Manhã</option>
				<option value="Tarde">Tarde</option>
				<option value="Noite">Noite</option>
					

					</SELECT>
			  </div>
  
  
  
  
  </div>
   
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=56"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  