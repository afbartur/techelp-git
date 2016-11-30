<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Equipamentos</h1>
								
						
						<label ></label>
						<script type="text/javascript" src="jquery.min.js"></script>
						<script type="text/javascript" src="javascriptpersonalizado.js"></script>
						
						<form method="POST" id="form-pesquisa" >
						<input required class="pesquisar" id="pesquisa" placeholder="Pesquisar" type="text" name="nome"></input>
						
						
						
						<input  class="btn btn-lg btn-primary novocadastro"  type="submit" value="Pesquisar"></input>
						</form>
						<a  class="form-signin" href="index.php?link=10"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Novo Cadastro" /></a>
												
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
							$resultado = mysqli_query($conn, "SELECT * FROM cadequipamento WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume">
            <thead>
              <tr>
                <th>ID</th>
				<th>Modificado por</th>
                <th>Nome</th>
                <th>Situação</th>
                <th>Descrição</th>
				<th>Tombo</th>
				<th></th>
			</tr>
            </thead>
            <tbody>
			
	<?php
	while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['modificadopor'] ."</td>";
		echo"<td>".$linhas['nome'] ."</td>";
		if ($linhas['situacao'] == 1){
			$sit = "Livre";
		};
		if ($linhas['situacao'] == 2){
			$sit = "Reservado";
		};
		if ($linhas['situacao'] == 3){
			$sit = "Emprestado";
		};
		echo"<td>".$sit ."</td>";
		echo"<td>".$linhas['descricao'] ."</td>";
		echo"<td>".$linhas['tombo'] ."</td>";
		
		?>
		<td><a href='index.php?link=11&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a><a href='index.php?link=14&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-pencil-square-o"></i> Editar
		
		
		</button></a><a onclick="return confirm('Deseja mesmo Excluir?');" href='index.php?link=15&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> Excluir</button></a>
		</td>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>