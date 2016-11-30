<?php
include_once("seguranca.php");
include_once("../conexao.php");

$data=date("d/m/Y");


?>     


<html >
<head>

</head>

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
    <td><h1> Relatório de Reservas</h1></td>
  </tr>
  <tr>
    <td>Rua Monsenhor Frota, 609. CEP: 63.430-000, Icó - CE. Fone: (88)3561-2760 / FAX: (88) 3561-2670</td>
  </tr>
</table>

							<?PHP
							
							$qtd= $_POST["qtda"];
							$equipamento=$_POST["equipamento"];
							$resultado = mysqli_query($conn, "SELECT * FROM relreserva WHERE equipamento LIKE '%$equipamento%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							?>	
							
							
							<div class="row">
        <div class="col-md-12">
          <table width="800" border="1" style ="table, th ,td{
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
                
                <td  ><h4>Usuário</h4></td>
				<td  ><h4>Locatário</h4></td>
                <td ><h4>Equipamento</h4></td>
				<td  ><h4>Data</h4></td>
                <td  ><h4>Horario Inicio</h4></td>
				<td ><h4>Horario Fim</h4></td>
				<td ><h4>Turno</h4></td>
				<td ><h4>Local</h4></td>
				<td ><h4>Sala</h4></td>
				<td ><h4>Data/Hora que foi feita</h4></td>
				
				
				
				
				
              </tr>
            </thead>
           
			
		<?php
		while($linhas= mysqli_fetch_array($resultado)){
		
		
		
		echo"<tr>";
		echo"<td>".$linhas['usuario'] ."</td>";
		echo"<td>".$linhas['usuario2'] ."</td>";
		echo"<td>".$linhas['equipamento'] ."</td>";
		$newDate = date("d-m-Y", strtotime($linhas['data']));
		echo"<td>".$newDate ."</td>";
		echo"<td>".$linhas['horarioinicio'] ."</td>";
		echo"<td>".$linhas['horariofim'] ."</td>";
		echo"<td>".$linhas['turno'] ."</td>";
		echo"<td>".$linhas['local'] ."</td>";
		echo"<td>".$linhas['sala'] ."</td>";
		$newDate2 = date("d-m-Y  h:i:s", strtotime($linhas['criado']));
		
		echo"<td>".$newDate2."</td>";
		
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
$mpdf=new mPDF('c','A4','','',10,10,10,25,16,13); 
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



	