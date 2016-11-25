<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Minhas Reservas</h1> 
								
						
						<label ></label>
						
						
						
						
						
					
						
						<?php
						
						?>
						
						<div class="float-right">
						<a href="index.php?link=39"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Nova Reserva" /></a>
						<form  method="POST">
						<select  class="btn btn-lg btn-primary " name="qtda">
						<option value="LIMIT 10"  >10 Últimos Cadastrados</option>
						<option value="LIMIT 20" >20 Últimos Cadastrados</option>
						<option value="LIMIT 30" >30 Últimos Cadastrados</option>
						<option value="LIMIT 40" >40 Últimos Cadastrados</option>
						<option value="LIMIT 50" >50 Últimos Cadastrados</option>
						<option value="LIMIT 99999999" selected >TODOS</option>											
						</select>
						
						<input   class="btn btn-lg btn-primary float-right"type="submit" value="OK" > 
						 
						</form>
						
							<?PHP
							//if($_POST["qtda"]== null){
							//	$qtd = "LIMIT 10";
							//}else{
								
							//	$qtd = $_POST["qtda"];
							
							//};
							$qtd = $_POST['qtda'];
							$nome = $_SESSION['UsuarioNome'];
							$resultado = mysqli_query($conn, "SELECT * FROM cadreserva WHERE usuario2 LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							if($linhas==null){
								echo"<center>Nenhuma reserva foi feita para esse usuário</center>";
							}
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume" style="font-size: 12px;">
            <thead>
              <tr>
                <th>ID</th>
				<th>Usuário</th>
				<th>Reserva para:</th>
                <th>Equipamento</th>
				<th>Para a Data</th>
				<th>Horário 1</th>
				<th>Horário 2</th>
				<th>Horário 3</th>
				<th>Turno</th>
				<th>Local</th>
				<th>Sala</th>
				<th>Data/Hora que foi feita</th>
                <th></th>
				
				
                
			</tr>
            </thead>
            <tbody>
			
		<?php
		while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo"<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['usuario'] ."</td>";
		echo"<td>".$linhas['usuario2'] ."</td>";
		echo"<td>".$linhas['equipamento'] ."</td>";
		$newDate = date("d-m-Y", strtotime($linhas['data']));
		echo"<td>".$newDate ."</td>";
		echo"<td>".$linhas['horarioinicio'] ."</td>";
		echo"<td>".$linhas['horariomeio'] ."</td>";
		echo"<td>".$linhas['horariofim'] ."</td>";
		echo"<td>".$linhas['turno'] ."</td>";
		echo"<td>".$linhas['local'] ."</td>";
		echo"<td>".$linhas['sala'] ."</td>";
		$newDate2 = date("d-m-Y  h:i:s", strtotime($linhas['criado']));
		
		echo"<td>".$newDate2."</td>";
		
		
		?>
		<td>
		
		
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>