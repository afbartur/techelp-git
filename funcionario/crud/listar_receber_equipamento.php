﻿<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Receber Equipamentos</h1>
								
						
						<label ></label>
						<script type="text/javascript" src="jquery.min.js"></script>
						<script type="text/javascript" src="javascriptpersonalizado.js"></script>
						
						<form method="POST" id="form-pesquisa" >
						<input required class="pesquisar" id="pesquisa" placeholder="Pesquisar" type="text" name="nome"></input>
						
						
						
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
          <table class="table fume">
            <thead>
              <tr>
                <th>ID</th>
                <th>Usuario do Sistema</th>
                <th>Professor</th>
				<th>Equipamento</th>
                <th>Situação</th>
				<th>Data da Entrega</th>
				<th>Previsão de Devolução</th>
				<th>Data de Recebido</th>
				<th>Data do Protocolo</th>
				<th>Data de Alteração</th>
				<th></th>
			</tr>
            </thead>
            <tbody>
			
	<?php
	while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['nome'] ."</td>";
		echo"<td>".$linhas['nomeprofessor'] ."</td>";
		echo"<td>".$linhas['equipamento'] ."</td>";
		echo"<td>".$linhas['situacao'] ."</td>";
		echo"<td>".$linhas['dataentrega'] ."</td>";
		echo"<td>".$linhas['dataprevista'] ."</td>";
		echo"<td>".$linhas['datarecebido'] ."</td>";
		$newDate = date("d-m-Y  h:i:s", strtotime($linhas['criado']));
		echo"<td>".$newDate."</td>";
		$newDate5 = date("d-m-Y  h:i:s", strtotime($linhas['modificado']));
		echo"<td>".$newDate5."</td>";
		
		
		
		
		
		?>
		<td>
		
		
		<a href='index.php?link=61&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn  btn-primary '><i class="fa fa-pencil-square-o"></i> Receber</button></a>
		
		
		
		</td>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>