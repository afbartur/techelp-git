<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Relatório de Empréstimos</h1>
								
						
						<label ></label>
						
						<div class="row">
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_emprestimo.php" target="_blank">
						<input class="form-control"  placeholder="Digite o equipamento desejado"  type="text" name="equipamento">
						<input  class="btn btn-lg btn-primary form-control" type="submit" value="Gerar por equipamento">
						
			
						</form>
						</div>
						
						
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_emprestimo_por_usuario.php" target="_blank">
						<input class="form-control"  placeholder="Digite o usuário desejado"  type="text" name="nome"></input>
						<a href="crud/relatorio_reserva.php"><input class="btn btn-lg btn-primary form-control" type = "submit" value="Gerar por Usuário" /></a>
						</form>
						</div>
						
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_emprestimo_por_data.php" target="_blank">
						<input class="form-control"  placeholder="Digite a data específica"  type="date" name="data"></input>
						<a href="crud/relatorio_reserva.php"><input class="btn btn-lg btn-primary form-control" type = "submit" value="Gerar por data" /></a>
						</form>
						</div>
						
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_emprestimo_por_data.php" target="_blank">
						<input class="form-control"  placeholder="Digite o ano"  type="text" name="data"></input>
						<a href="crud/relatorio_reserva.php"><input class="btn btn-lg btn-primary form-control" type = "submit" value="Gerar por ano" /></a>
						</form>
						</div>
						
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_emprestimo_por_data.php" target="_blank">
						<input class="form-control"  placeholder="Digite assim: ano-mês"  type="text" name="data"></input>
						<a href="crud/relatorio_reserva.php"><input class="btn btn-lg btn-primary form-control" type = "submit" value="Gerar por mês" /></a>
						</form>
						</div>
						
						
						
						<?php
						
						?>
						<div class="form-group col-md-4">
						
						<form  method="POST" action="crud/relatorio_emprestimo.php" target="_blank">
						<select  class="btn  btn-primary form-control" name="qtda">
						<option value="LIMIT 10" selected >10 Últimos Cadastrados</option>
						<option value="LIMIT 20" >20 Últimos Cadastrados</option>
						<option value="LIMIT 30" >30 Últimos Cadastrados</option>
						<option value="LIMIT 40" >40 Últimos Cadastrados</option>
						<option value="LIMIT 50" >50 Últimos Cadastrados</option>
						<option value="LIMIT 99999999"  >TODOS</option>											
						</select>
						
						<input   class="btn btn-primary form-control"type="submit" value="Gerar por quantidade" > 
						 
						</form>
						
													
		
						
						</div >
				</div>
              
             </tbody>
          </table>
        </div>