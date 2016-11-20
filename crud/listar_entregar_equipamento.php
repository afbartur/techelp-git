<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Empréstimo de Equipamentos</h1>
								
						
						<label ></label>
						<script type="text/javascript" src="jquery.min.js"></script>
						<script type="text/javascript" src="javascriptpersonalizado.js"></script>
						
						<form method="POST" id="form-pesquisa" >
						<input class="pesquisar" id="pesquisa" placeholder="Pesquisar" type="text" name="nome"></input>
						
						
						
						<input  class="btn btn-lg btn-primary novocadastro"  type="submit" value="Pesquisar"></input>
						</form>
						<a  class="form-signin" href="index.php?link=54"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Novo Empréstimo" /></a>
												
						<ul class="resultado">
		
						</ul>
						
						
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
							$nome=$_POST["nome"];
							$resultado = mysqli_query($conn, "SELECT * FROM cadendregas WHERE nomeprofessor LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume" style="font-size: 11px;">
            <thead>
              <tr>
                
                <th>Usuario do sistema:</th>
                <th>Locatário</th>
				<th>Equipamento</th>
				<th>Local</th>
				<th>Sala</th>
				<th>Curso</th>
				<th>Horário1</th>
				<th>Horário2</th>
				<th>Horário3</th>
				<th>Turno</th>
                <th>Situação</th>
				<th>Data da Entrega</th>
				<th>Previsão do Retorno</th>
				<th>Data do Retorno</th>
				
				
				<th></th>
			</tr>
            </thead>
            <tbody>
			
	<?php
	while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		
		echo"<td>".$linhas['nome'] ."</td>";
		echo"<td>".$linhas['nomeprofessor'] ."</td>";
		echo"<td>".$linhas['equipamento'] ."</td>";
		echo"<td>".$linhas['local'] ."</td>";
		echo"<td>".$linhas['sala'] ."</td>";
		echo"<td>".$linhas['curso'] ."</td>";
		echo"<td>".$linhas['horario1'] ."</td>";
		echo"<td>".$linhas['horario2'] ."</td>";
		echo"<td>".$linhas['horario3'] ."</td>";
		echo"<td>".$linhas['turno'] ."</td>";
		echo"<td>".$linhas['situacao'] ."</td>";
		$newDate2 = date("d-m-Y  ", strtotime($linhas['dataentrega']));
		echo"<td>".$newDate2."</td>";
		$newDate3 = date("d-m-Y  ", strtotime($linhas['dataprevista']));
		echo"<td>".$newDate3."</td>";
		
		echo"<td>".$linhas['datarecebido']."</td>";
		
		
		
		
		
		
		
		?>
		
		<td>
		
		
		<a href='index.php?link=61&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn  btn-primary '><i class="fa fa-pencil-square-o"></i> Receber</button></a>
		
		
		
		</td>
		<td><a href='index.php?link=57&id=<?php echo $linhas['id']; ?>'><button title="Apagar" type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar</button></a>
		
		<a href='index.php?link=66&id=<?php echo $linhas['id']; ?>'><button title="Editar" type='buton' class='btn butaox btn-primary '><i class="fa fa-pencil-square-o"></i> Editar</button></a>
		
		
		<a onclick="return confirm('Deseja mesmo Excluir?');" href='index.php?link=63&id=<?php echo $linhas['id']; ?>'><button title="Excluir" type='buton' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> X</button></a>
		</td>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>
		</div>