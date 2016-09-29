<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Reclamação</h1>
								
						
						<label ></label>
						
						<form method="POST">
						<input class="pesquisar"  placeholder="Pesquisar"  type="text" name="titulo"></input>
						<input  class="btn btn-lg btn-primary novocadastro" type="submit" value="Pesquisar"></input>
						<a href="index.php?link=25"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Novo Cadastro" /></a>
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
						<option value=""  >TODOS</option>											
						</select>
						
						<input   class="btn btn-lg btn-primary "type="submit" value="OK" > 
						 
						</form>
						</div>
							<?PHP
							
							$qtd= $_POST["qtda"];
							$titulo=$_POST["titulo"];
							$resultado = mysql_query("SELECT * FROM cadreclamacao WHERE titulo LIKE '%$titulo%' ORDER BY id DESC $qtd" );
							$linhas=mysql_num_rows($resultado);
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume">
            <thead>
              <tr>
                <th>ID</th>
				<th>Data</th>
                <th>Título</th>
                <th></th>
				<th></th>
                
			</tr>
            </thead>
            <tbody>
			
		<?php
		while($linhas= mysql_fetch_array($resultado)){
		
		
		
		echo"<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['criado'] ."</td>";
		echo"<td>".$linhas['titulo'] ."</td>";
		echo"<td></td>";
		echo"<td></td>";
		
		
		?>
		<td><a href='index.php?link=33&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a><a href='index.php?link=27&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-pencil-square-o"></i> Editar
		</button></a><a href='index.php?link=29&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> Excluir</button></a>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>