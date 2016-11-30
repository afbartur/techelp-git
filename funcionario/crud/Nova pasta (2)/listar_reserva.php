<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Listar Reservas</h1>
								
						
						<label ></label>
						
						<form method="POST">
						<input required class="pesquisar"  placeholder="Pesquisar nome"  type="text" name="usuario2"></input>
						<input  class="btn btn-lg btn-primary novocadastro" type="submit" value="Pesquisar"></input>
						<a href="index.php?link=39"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Nova Reserva" /></a>
						</form>
						
						<?php
						
						?>
						
						<div class="float-right">
						<form  method="POST">
						<select  class="btn btn-lg btn-primary " name="qtda">
						<option value="LIMIT 10" selected >10 Últimos Cadastrados</option>
						<option value="LIMIT 20" >20 Últimos Cadastrados</option>
						<option value="LIMIT 30" >30 Últimos Cadastrados</option>
						<option value="LIMIT 40" >40 Últimos Cadastrados</option>
						<option value="LIMIT 50" >50 Últimos Cadastrados</option>
						<option value="LIMIT 99999999"  >TODOS</option>											
						</select>
						
						<input   class="btn btn-lg btn-primary float-right"type="submit" value="OK" > 
						 
						</form>
						
							<?PHP
							if($_POST["qtda"]== null){
								$qtd = "LIMIT 10";
							}else{
								
								$qtd = $_POST["qtda"];
							
							};
							$usuario2=$_POST["usuario2"];
							$resultado = mysqli_query($conn, "SELECT * FROM cadreserva WHERE usuario2 LIKE '%$usuario2%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
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
		
		<a href='index.php?link=68&id=<?php echo $linhas['id']; ?>'><button title="Empestar" type='buton' class='btn  btn-primary '><i class="fa fa-share-square" aria-hidden="true"></i> Emprestar
		</button></a>
		</td>
		<td>
		
		<a href='index.php?link=58&id=<?php echo $linhas['id']; ?>'><button title="Visualizar" type='buton' class='btn  btn-primary '><i class="fa fa-eye" ></i> 
		</button></a>
		</td>
		<td>
		<a href='index.php?link=41&id=<?php echo $linhas['id']; ?>'><button title="Editar"type='buton' class='btn btn-primary '><i class="fa fa-pencil-square-o"></i> 
		
		
		
		</button></a>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>