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
    <td><h1> Relatório de Reservas</h1></td>
  </tr>
  <tr>
    <td>Rua Monsenhor Frota, 609. CEP: 63.430-000, Icó - CE. Fone: (88)3561-2760 / FAX: (88) 3561-2670</td>
  </tr>
</table>

							<?PHP
							
							
							$sdata =" AND data LIKE";
							$sdata1 =" AND usuario2 LIKE";
							$sdata2 =" AND equipamento LIKE";
							$sdata3 =" AND curso LIKE";
							$sdata4 =" AND local LIKE";
							$sdata5 =" AND sala LIKE";

							
							if($_POST["datadia"]!= null){
								$okdata1 = $sdata." ". "'%".$_POST["datadia"]."%'";
								
								//date("d-m-Y", strtotime($_POST["datadia"]))
							}
							if($_POST["datames"]!= null){
								 $okdata2 = $sdata." ". "'%".$_POST["datames"]."%'";
							}
							if($_POST["dataano"]!= null){
								 $okdata3 = $sdata." ". "'%".$_POST["dataano"]."%'";
							}
							
							if($_POST["nome"]!= null){
								 $okdata4 = $sdata1." ". "'%".$_POST["nome"]."%'";
							}
							if($_POST["equipamento"]!= null){
								 $okdata5 = $sdata2." ". "'%".$_POST["equipamento"]."%'";
							}
							if($_POST["curso"]!= null){
								 $okdata6 = $sdata3." ". "'%".$_POST["curso"]."%'";
							}
							if($_POST["local"]!= null){
								 $okdata7 = $sdata4." ". "'%".$_POST["local"]."%'";
							}
							if($_POST["sala"]!= null){
								 $okdata8 = $sdata5." ". "'%".$_POST["sala"]."%'";
							}
							
							
							
							
							
							$qtd = $_POST["qtda"];
							$nome = $_POST["nome"];
														
							$resultado = mysqli_query($conn, "SELECT * FROM cadreserva WHERE usuario2 LIKE '%$nome%' $okdata1 $okdata2 $okdata3 $okdata5 $okdata6 $okdata7 $okdata8 ORDER BY id DESC $qtd" );
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
                
                <td  ><h5>Usuário</h5></td>
				 <td  ><h5>Locatário</h5></td>
                <td ><h5>Equipamento</h5></td>
                <td  ><h5>Data</h5></td>
				<td ><h5>Horário 1</h5></td>
				<td ><h5>Horário 2</h5></td>
				<td ><h5>Horário 3</h5></td>
				<td ><h5>Turno</h5></td>
				<td ><h5>Curso</h5></td>
				<td ><h5>Local</h5></td>
				<td ><h5>Sala</h5></td>
				<td ><h5>Data/Hora que foi feita</h5></td>
							
				
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
		echo"<td>".$linhas['horariomeio'] ."</td>";
		echo"<td>".$linhas['horariofim'] ."</td>";
		echo"<td>".$linhas['turno'] ."</td>";
		echo"<td>".$linhas['curso'] ."</td>";
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
$mpdf=new mPDF('A4','','',10,10,10,25,16,13); 
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



	