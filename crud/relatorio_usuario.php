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
    <td><h1> Relatório de Usuários</h1></td>
  </tr>
  <tr>
    <td>Rua Monsenhor Frota, 609. CEP: 63.430-000, Icó - CE. Fone: (88)3561-2760 / FAX: (88) 3561-2670</td>
  </tr>
</table>

<?PHP
							
							$qtd = $_POST["qtda"];
							$nome = $_POST["nome"];
							$resultado = mysqli_query($conn, "SELECT * FROM cadusuario WHERE nome LIKE '%$nome%' ORDER BY id DESC $qtd" );
							$linhas=mysqli_num_rows($resultado);
							
							?>	
							
							
							<div class="row">
        <div class="col-md-12">
          <table width="700"  border="1 " style ="table, th ,td{
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
                
                <td  ><h3>Nome</h3></td>
                <td ><h3>E-mail</h3></td>
                <td  ><h3>CPF</h3></td>
				<td ><h3>Nivel de Acesso</h3></td>
				
              </tr>
            </thead>
           
			
		<?php
				while($linhas= mysqli_fetch_array($resultado)){
		
		
		
				echo "<tr>";
				
				echo"<td width='1' >".$linhas['nome'] ."</td>";
				echo"<td width='1'>".$linhas['email'] ."</td>";
				echo"<td width='1'>".$linhas['cpf'] ."</td>";
				if ($linhas['tipousuario'] == 1){
					$sit = "Administrador";
				};
				if ($linhas['tipousuario'] == 2){
					$sit = "Professor";
				};
				if ($linhas['tipousuario'] == 3){
					$sit = "Funcionário";
				};
				if ($linhas['tipousuario'] == 4){
					$sit = "Estagiáriio";
				};
				echo"<td width='1' >".$sit ."</td>";
				
				
				
		
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



	