        <h1 class="text-center">Lista de Usuários</h1>
								
				
						
						<div class="form-group">
						<label ></label>
						
						<form method="POST">
						<input class="form-control"  placeholder="Pesquisar"  type="text" name="nome"></input>
						<input  class="btn btn-lg btn-primary btn-block" type="submit" value="Pesquisar"></input>
						</form>
						</div>
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
							
							$qtd= $_POST["qtda"];
							$nome=$_POST["nome"];
							$resultado = mysql_query("SELECT * FROM cadusuario WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
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
                <th>E-mail</th>
                <th>CPF</th>
				<th>Nivel de Acesso</th>
				<th>Ações</th>
              </tr>
            </thead>
            <tbody>
			
			<?php
			while($linhas= mysql_fetch_array($resultado)){
				
				
				
				echo "<tr>";
				echo"<td>".$linhas['id'] ."</td>";
				echo"<td>".$linhas['nome'] ."</td>";
				echo"<td>".$linhas['email'] ."</td>";
				echo"<td>".$linhas['cpf'] ."</td>";
				echo"<td>".$linhas['tipousuario'] ."</td>";
				echo"<td><a href=''><button type='buton' class='btn btn-sm btn-default'>Visualizar Completo</button></a>-<a href=''><button type='buton' class='btn btn-sm btn-default'>Editar</button></a>- <a href=''><button type='buton' class='btn btn-sm btn-default'>Excluir</button></a></td>";
				echo "</tr>";
			}
			?>
              
             </tbody>
          </table>
        </div>