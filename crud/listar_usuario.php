<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Usuários</h1>
								
				
						
						
						<label ></label>
						
						<form method="POST">
						<input class="pesquisar"  placeholder="Pesquisar"  type="text" name="nome"></input>
						<input  class="btn btn-lg btn-primary novocadastro" type="submit" value="Pesquisar"></input>
						</form>
						<a  class="form-signin" href="index.php?link=3"><input class="btn btn-lg btn-primary novocadastro" type = "button" value=" + Novo Cadastro" /></a>
						<?php
						
						?>
						<form  method="POST">
						<select  class="btn btn-lg btn-primary " name="qtda">
						<option value="LIMIT 10" selected >10 Últimos Cadastrados</option>
						<option value="LIMIT 20" >20 Últimos Cadastrados</option>
						<option value="LIMIT 30" >30 Últimos Cadastrados</option>
						<option value="LIMIT 40" >40 Últimos Cadastrados</option>
						<option value="LIMIT 50" >50 Últimos Cadastrados</option>
						<option value=""  >TODOS</option>											
						</select>
						
						<input   class="btn btn-lg btn-primary float-right"type="submit" value="OK" > 
						 
						</form>
						
							<?PHP
							
							$qtd = $_POST["qtda"];
							$nome = $_POST["nome"];
							$resultado = mysqli_query($conn, "SELECT * FROM cadusuario WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
				<th>Nivel de Acesso</th>
				<th>Ações</th>
              </tr>
            </thead>
            <tbody>
			
		<?php
				while($linhas= mysqli_fetch_array($resultado)){
		
		
		
				echo "<tr>";
				echo"<td>".$linhas['id'] ."</td>";
				echo"<td>".$linhas['nome'] ."</td>";
				echo"<td>".$linhas['email'] ."</td>";
				echo"<td>".$linhas['cpf'] ."</td>";
				if ($linhas['tipousuario'] == 1){
					$sit = "Administrador";
				};
				if ($linhas['tipousuario'] == 2){
					$sit = "Professor";
				};
				if ($linhas['tipousuario'] == 3){
					$sit = "Funcionário";
				};
				if ($linhas['tipousuario'] == 4){
					$sit = "Estagiáriio";
				};
				echo"<td>".$sit ."</td>";
				
				
				
		
		?>
		<td><a href='index.php?link=7&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a>
		
		
		<a href='index.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-pencil-square-o"></i> Editar
		</button></a>
		
		<a onclick="return confirm('Deseja mesmo Excluir?');"  href='index.php?link=8&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> Excluir</button></a>
		</td>
		<?php
				echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>