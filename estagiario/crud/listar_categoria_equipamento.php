<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Lista de categorias de Equipamentos</h1>
								
						
						<label ></label>
						<script type="text/javascript" src="jquery.min.js"></script>
						<script type="text/javascript" src="javascriptpersonalizado.js"></script>
						
						<form method="POST" id="form-pesquisa" >
						<input required class="pesquisar" id="pesquisa" placeholder="Pesquisar" type="text" name="nome"></input>
						
						
						
						<input  class="btn btn-lg btn-primary novocadastro"  type="submit" value="Pesquisar"></input>
						</form>
						<a  class="form-signin" href="index.php?link=47"><input class="btn btn-lg btn-primary novocadastro" type = "button" value="+ Novo Cadastro" /></a>
												
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
							$resultado = mysqli_query($conn, "SELECT * FROM cadcategoriaequipamento WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
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
				<th>Data de Criação</th>
               
				<th></th>
			</tr>
            </thead>
            <tbody>
			
	<?php
	while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['nome'] ."</td>";
		$newDate2 = date("d-m-Y  h:i:s", strtotime($linhas['criado']));
		
		echo"<td>".$newDate2."</td>";
		
		
		?>
		<td><a href='index.php?link=50&id=<?php echo $linhas['id']; ?>'><button type='buton' class='btn butaox btn-primary '><i class="fa fa-eye" ></i> Visualizar
		</button></a>
		
		
		
		</td>
		</td>
		<?php
		
		echo "</tr>";
	}
			?>
              
             </tbody>
          </table>
        </div>