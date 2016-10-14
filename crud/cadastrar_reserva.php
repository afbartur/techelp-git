<?php
include_once("seguranca.php");
?>
        <h1 class="text-center">Realizar Reserva</h1>
		
		<div class="row">
		

							
			<form class="fume  " method="POST" action="index.php?link=37">
			
			<div class="row">
			
			<div class="form-group col-md-2">
			
			<label >Uruário:</label>
			<select disabled class="form-control" >
			<option><?php
			echo $_SESSION['UsuarioNome'];
			?></option>
			</select>
			<input type="hidden" name="usuario" value="<?php echo $_SESSION['UsuarioNome'];	?>">

			</div>
			
  <div class="form-group col-md-2">
    <label >Horário inicio</label>
	<SCRIPT LANGUAGE="JavaScript">
<!--
function Mascara_Hora(Hora){ 
var hora01 = ''; 
hora01 = hora01 + Hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].Hora.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora(); 
} 
} 
           
function Verifica_Hora(){ 
hrs = (document.forms[0].Hora.value.substring(0,2)); 
min = (document.forms[0].Hora.value.substring(3,5)); 
               
estado = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado = "errada"; 
} 
               
if (document.forms[0].Hora.value == "") { 
estado = "errada"; 
} 
 
if (estado == "errada") { 
alert("Hora inválida!"); 
document.forms[0].Hora.focus(); 
} 
} 
//-->
</script>
	


<input name="horarioinicio" class="form-control" type="text" id="Hora" OnKeyUp="Mascara_Hora(this.value)" 
size="5" maxlength="5"></td>


   
	
  
  
  
  </div>
   <div class="form-group col-md-2">
    <label >Horário fim</label>
	<SCRIPT LANGUAGE="JavaScript">
<!--
function Mascara_Hora2(Hora2){ 
var hora01 = ''; 
hora01 = hora01 + Hora2; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].Hora2.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora(); 
} 
} 
           
function Verifica_Hora(){ 
hrs = (document.forms[0].Hora2.value.substring(0,2)); 
min = (document.forms[0].Hora2.value.substring(3,5)); 
               
estado = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado = "errada"; 
} 
               
if (document.forms[0].Hora2.value == "") { 
estado = "errada"; 
} 
 
if (estado == "errada") { 
alert("Hora inválida!"); 
document.forms[0].Hora2.focus(); 
} 
} 
//-->
</script>
	


<input name="horariofim" class="form-control" type="text" id="Hora2" OnKeyUp="Mascara_Hora2(this.value)" 
size="5" maxlength="5"></td>


   
	
  
  
  
  </div>
  <div class="form-group col-md-2">
    <label >Turno</label>
	<select class="form-control" name="turno"> 
		<option>Selecione</option>
		<option value="Manhã">Manhã</option>
		<option value="Tarde">Tarde</option>
		<option value="Noite">Noite</option>
		
	</select>
    
  </div>
    <div class="form-group col-md-2">
    <label >Data</label>
	<input class="form-control" name="data" type="date" required placeholder="Digite a Data"  />
      </div>
  <div class="form-group col-md-2">
    <label >Local</label>
	 	 <SELECT class="form-control" name="local" size="1">
	
		<option value="Anexo"> 
		 Anexo
		</option>
		<option value="Principal"> 
		 Principal
		</option>
	
		

</SELECT>
		 
	
    
  </div>
  
  <div class="form-group col-md-4">
    <label >Sala</label>
	 <SELECT class="form-control" name="sala" size="1">
	
<?php
	$resultado = mysql_query("SELECT sala FROM cadlocal" );
	$linhas=mysql_num_rows($resultado);
	
	While($registro=mysql_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		print "$registro[sala]"
		?> 
		</option>
	
		<?php
		}
		mysql_free_result($resultado);

		?>

</SELECT>
	 
    
  </div>
  <div class="form-group col-md-4">
    <label >Curso</label>
	 <SELECT class="form-control" name="curso" size="1">
	
<?php
	$resultado = mysql_query("SELECT nome FROM cadcurso" );
	$linhas=mysql_num_rows($resultado);
	
	While($registro=mysql_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		print "$registro[nome]"
		?> 
		</option>
	
		<?php
		}
		mysql_free_result($resultado);

		?>

</SELECT>
	 
    
  </div>
  
	
	<div class="form-group col-md-4">
	<label >Pesquisar Equipamento</label>
	<SELECT class="form-control" name="equipamento" size="1">
	
<?php
	$resultado = mysql_query("SELECT nome FROM cadequipamento WHERE situacao = 1" );
	$linhas=mysql_num_rows($resultado);
	
	While($registro=mysql_fetch_array($resultado))
		{
?>	
		<option> 
		<?php
		print "$registro[nome]"
		?> 
		</option>
	
		<?php
		}
		mysql_free_result($resultado);

		?>

</SELECT>
	
  
  
  </div>
  </div>
 
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=38"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
	
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  