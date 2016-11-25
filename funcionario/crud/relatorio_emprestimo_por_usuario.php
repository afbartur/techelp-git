<?php
include_once("seguranca.php");
include_once("../conexao.php");

$data=date("d/m/Y");


?>     


<html >


<body>


<table width="800" border="0" style ="table, th ,td{
	border: 3px solid;
	border-collapse: collapse;
	padding: 8px;
	border-color:#fff;
	padding: 8px;
	text-align: center;
	background-color: #F5FFFA;
	
}">
  <tr>
    <td width="203" rowspan="3"><img src="../imagens/Imagem1.png" width="80" height="90" /></td>
    
    <td width="325" align="right"><h6>Data de Impressão: <?php echo $data?></h6></td>
  </tr>
  <tr>
    <td><h1> Relatório Emprestimo de Equipamentos</h1></td>
  </tr>
  <tr>
    <td>Rua Monsenhor Frota, 609. CEP: 63.430-000, Icó - CE. Fone: (88)3561-2760 / FAX: (88) 3561-2670</td>
  </tr>
</table>

<?PHP
							
							$qtd= $_POST["qtda"];
							$nome=$_POST["nome"];
							$equipamento=$_POST["equipamento"];
							$resultado = mysqli_query($conn, "SELECT * FROM cadendregas WHERE nomeprofessor LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							?>
							
							
							<div class="row">
        <div class="col-md-12">
          <table width="700"  border="1" style ="table, th ,td{
	border: 3px solid;
	border-collapse: collapse;
	padding: 8px;
	border-color:#fff;
	padding: 8px;
	text-align: center;
	background-color: #F5FFFA;
	
}">
            <thead>
              <tr>
                
                <th>Usuario do sistema:</th>
                <th>Locatário</th>
				<th>Equipamento</th>
				<th>Local</th>
				<th>Sala</th>
				<th>Curso</th>
				<th>Horário1</th>
				<th>Horário2</th>
				<th>Horário3</th>
				<th>Turno</th>
                <th>Situação</th>
				<th>Data da Entrega</th>
				<th>Previsão do Retorno</th>
				<th>Data do Retorno</th>
				
              </tr>
            </thead>
           
			
		<?php
				while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo "<tr>";
		
		echo"<td>".$linhas['nome'] ."</td>";
		echo"<td>".$linhas['nomeprofessor'] ."</td>";
		echo"<td>".$linhas['equipamento'] ."</td>";
		echo"<td>".$linhas['local'] ."</td>";
		echo"<td>".$linhas['sala'] ."</td>";
		echo"<td>".$linhas['curso'] ."</td>";
		echo"<td>".$linhas['horario1'] ."</td>";
		echo"<td>".$linhas['horario2'] ."</td>";
		echo"<td>".$linhas['horario3'] ."</td>";
		echo"<td>".$linhas['turno'] ."</td>";
		echo"<td>".$linhas['situacao'] ."</td>";
		$newDate2 = date("d-m-Y  ", strtotime($linhas['dataentrega']));
		echo"<td>".$newDate2."</td>";
		$newDate3 = date("d-m-Y  ", strtotime($linhas['dataprevista']));
		echo"<td>".$newDate3."</td>";
		
		echo"<td>".$linhas['datarecebido']."</td>";
				
				
				
		
		?>
		
		<?php
				echo "</tr>";
	}
			?>
              
             
          </table>
        </div>
	</div>







</body>
</html>







<?php include("pdf/mpdf.php");
$html = ob_get_clean();
$mpdf=new mPDF('A4','','',10,10,10,10,16,13); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;	
//$stylesheet = file_get_contents('estilohome.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($date,2);	
$mpdf->WriteHTML($html,3);
$mpdf->charset_in='UTF-8';
$mpdf->Output('Relatório_de_Usuarios.pdf','I');
exit;
?>



	