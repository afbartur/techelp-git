﻿<?php
include_once("seguranca.php");
?>     
	 <h1 class="text-center">Relatório de Reservas</h1>
	 <h4 class="text-center">Preencha somente os campos necessários </h4>
								
						
						<label ></label>
						
						<div class="row">
						<div class="form-group col-md-4">
						<form method="POST" action="crud/relatorio_reserva.php" target="_blank">
						<label>Usuário:</label>
						<input class="form-control"  placeholder="Digite o usuário desejado"  type="text" name="nome"></input>
						
						
						
			
						
						</div>
						
						
						<div class="form-group col-md-4">
						<label>Equipamento:</label>
						<input class="form-control"  placeholder="Digite o equipamento desejado"  type="text" name="equipamento"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Data:</label>
						<input class="form-control"  placeholder="Digite a data dd-mm-aaaa"  type="date" name="datadia"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Ano:</label>
						<input class="form-control"  placeholder="Digite o ano"  type="text" name="dataano"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Mês:</label>
						<input class="form-control"  placeholder="Digite assim: ano-mês"  type="text" name="datames"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Corso:</label>
						<input class="form-control"  placeholder="Digite o Curso"  type="text" name="curso"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Local:</label>
						<input class="form-control"  placeholder="Anexo ou Principal"  type="text" name="local"></input>
						
						
						</div>
						
						<div class="form-group col-md-4">
						<label>Sala:</label>
						<input class="form-control"  placeholder="Digite o número ou nome da sala"  type="text" name="sala"></input>
						
						
						</div>
						
						
						<?php
						
						?>
						<div class="form-group col-md-4">
						
						<label>Quantidade:</label>
						<select  class="form-control" name="qtda">
						<option value="LIMIT 10" >10 Últimos Cadastrados</option>
						<option value="LIMIT 20" >20 Últimos Cadastrados</option>
						<option value="LIMIT 30" >30 Últimos Cadastrados</option>
						<option value="LIMIT 40" >40 Últimos Cadastrados</option>
						<option value="LIMIT 50" >50 Últimos Cadastrados</option>
						<option value="LIMIT 99999999" selected >TODOS</option>											
						</select>
						
						
						
													
		
						
						</div >
				</div>
				<p class="text-center">
              
			  	
				
				 <button type='submit' class='btn  btn-primary '><i class="fa fa-spinner" aria-hidden="true"></i> Gerar Relatório</button>
				 
				
			 <button type='reset' class='btn  btn-primary  '><i class="fa fa-eraser" aria-hidden="true"></i> limpar Campos</button>	
			  
			  
						 </p>
						</form>
			  
             </tbody>
          </table>
        </div>