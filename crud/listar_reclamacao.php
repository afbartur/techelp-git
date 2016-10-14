<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de Reclamação</h1>
								
						
						<label ></label>
						
						<form method="POST">
						<input class="pesquisar"  placeholder="Pesquisar"  value="1" type="hidden" name="situacao"></input>
						<input  class="btn btn-lg btn-primary novocadastro" type="submit" value="Não Lidas"></input>
						
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
							$situacao=$_POST["situacao"];
							$resultado = mysql_query("SELECT * FROM cadreclamacao WHERE situacao LIKE '%$situacao%' ORDER BY id DESC $qtd" );
							$linhas=mysql_num_rows($resultado);
							?>							
		
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table fume ">
            <thead>
              <tr >
                <th>ID</th>
				<th>Data</th>
                <th>Título</th>
				<th>Situação</th>
                <th></th>
                
			</tr>
            </thead>
            <tbody>
			
		<?php
		while($linhas= mysql_fetch_array($resultado)){
		
		
		
		
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['criado'] ."</td>";
		echo"<td>".$linhas['titulo'] ."</td>";
		echo"<td>".$linhas['situacao']."</td>";
		
		
		
		?>
		<td><a href='index.php?link=33&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a>
		
		<script>
function confirma()
{
if (confirm ("Tem certeza que deseja excluir?"))
{ window.location.; }
}
</script>
			
		
		<a ><button type='buton' href='index.php?link=40&id=<?php echo $linhas['id']; ?>' class='btn butaox btn-primary '><i class="fa fa-times-circle"></i> Excluir
		</button></a>
		
		          
	
		
		
		
		
		
		
		
		
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
			
			
			  
             </tbody>
          </table>
        </div>