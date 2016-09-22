<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/favicon.ico">
    <title>Recuperação de Senha -Techelp</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container ">
	
	

      <form class="form-signin fume text-center" onsubmit="return checkform(this);" method='post' action="processa/cad_reclamacao.php" enctype='multipart/form-data' >
	  <div class="form-signin2">
	 	  
	  </div>
        <h2 class="form-signin-heading text-center">Realizar Reclamação</h2>
        
		<label  class="sr-only">Titulo:</label>
        <input type="text" name="titulo" class="form-control" placeholder="Titulo" required autofocus></input><br>
		
		<label  class="sr-only">Descrição:</label>
        <textarea type="text" name="descricao" class="form-control" placeholder="Descrição" required ></textarea><br>
       
	   <span id="txtCaptchaDiv" style="background-color:#A51D22;color:#FFF;padding:5px " class="form-control" ></span>
		<input type="hidden" id="txtCaptcha" />
		<input placeholder="Dite o código de segurança!" class="form-control" type="text" name="txtInput" id="txtInput" size="15" /><br>
	   
	   
		<input type="file" name='foto' id="file" class="inputfile " />
		<label for="file" class="btn btn-lg btn-primary btn-block">Obter Imagem</label>
		
		
		
		<input class="btn btn-lg btn-primary btn-block" type='submit' name='submit' Value="Enviar"></input>
		
		<a class="btn btn-lg btn-block"href="login.php">Voltar</a>
		
		


</form>


<script type="text/javascript">
function checkform(theform){
var why = "";

if(theform.txtInput.value == ""){
why += "- DIGITE O CÓDIGO DE SEGURANÇA PARA CONTINUAR!.\n";
}
if(theform.txtInput.value != ""){
if(ValidCaptcha(theform.txtInput.value) == false){
why += "- CÓDIGO INCORRETO, TENTE NOVAMENTE!.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

//Generates the captcha function
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';
var f = Math.ceil(Math.random() * 9)+ '';
var g = Math.ceil(Math.random() * 9)+ '';
var h = Math.ceil(Math.random() * 9)+ '';
var i = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e + f + g + h + i ;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code;

// Validate the Entered input aganist the generated security code function
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>


		
      </form>
	 
	 
		
		

	
    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
