﻿<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Equipamentos</h1>
								
						
						<label ></label>
						
						<form method="POST">
						<input class="pesquisar"  placeholder="Pesquisar"  type="text" name="nome"></input>
						<input  class="btn btn-lg btn-primary novocadastro" type="submit" value="Pesquisar"></input>
						</form>
						<a  class="form-signin" href="index.php?link=10"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Novo Cadastro" /></a>
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
						<option value=""  >TODOS</option>											
						</select>
						
						<input   class="btn btn-lg btn-primary "type="submit" value="OK" > 
						 
						</form>
						</div>
							<?PHP
							
							$qtd= $_POST["qtda"];
							$nome=$_POST["nome"];
							$resultado = mysql_query("SELECT * FROM cadequipamento WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysql_num_rows($resultado);
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Situação</th>
                <th>Descrição</th>
				<th>Tombo</th>
			</tr>
            </thead>
            <tbody>
			
	<?php
	while($linhas= mysql_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['nome'] ."</td>";
		echo"<td>".$linhas['situacao'] ."</td>";
		echo"<td>".$linhas['descricao'] ."</td>";
		echo"<td>".$linhas['tombo'] ."</td>";
		
		?>
		<td><a href='index.php?link=11&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a><a href='index.php?link=14&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-pencil-square-o"></i> Editar
		</button></a><a href='index.php?link=15&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> Excluir</button></a>
		</td>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>