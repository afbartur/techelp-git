<?php
include_once("seguranca.php");
?>
<?php
$id= $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM cadusuario WHERE id = '$id' LIMIT 1 ");
$resultado = mysqli_fetch_assoc($result);
?>
        <h1 class="text-center">Editar Usuário</h1>
								
			<form class="fume" method="POST" action="index.php?link=5">
  <div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['nome'] ;?>" required name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label >E-mail</label>
    <input type="text" class="form-control" value= "<?php echo $resultado['email'] ;?>"required name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label >Senha</label>
    <input type="password" class="form-control" value= "<?php echo $resultado['senha'] ;?>"required name="senha" placeholder="Senha">
  </div>
  <div class="form-group">
    <label >CPF</label>
	<script>
	function validarCPF( cpf ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		window.alert("CPF inválido. Tente novamente.");
		return false;
   }

	soma = 0;
	for(i = 0; i < 9; i++)
	{
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
	
	soma = 0;
	for(i = 0; i < 10; i ++)
	{
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	
	if(resto != parseInt(cpf.charAt(10))){
		window.alert("CPF inválido. Tente novamente.");
		return false;
	}
	
	return true;
 }
 
function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

/**
   * MASCARA ( mascara(o,f) e execmascara() ) CRIADAS POR ELCIO LUIZ
   * elcio.com.br
   */
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

function cpf_mask(v){
	v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dígitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dígitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
	return v
}
</script>
<input class="form-control type="text" value= "<?php echo $resultado['cpf'] ;?>" name="cpf" id="cpf" 
onblur="javascript: validarCPF(this.value);" 
onkeypress="javascript: mascara(this, cpf_mask);"  maxlength="14" />
    
  </div>
 
  
  <div class="form-group">
    <label >Tipo de Usuário</label>
    <select class="btn btn-lg btn-primary btn-block" name="tipousuario" required>
		<option>Selecione<option>
		<option value="1" 
		<?php
		if ($resultado['tipousuario'] == 1){
			echo "selected";
		}
		?>
		
		>Administrador</option>
		<option value="2" 
		<?php if ($resultado['tipousuario'] == 2){
			echo "selected";
		}
		?>
		>Professor</option>
		<option value="3" 
		<?php if ($resultado['tipousuario'] == 3){
			echo "selected";
		}
		?>
		>Funcionário</option>
		<option value="4" 
		<?php if ($resultado['tipousuario'] == 4){
			echo "selected";
		}
		?>
		>Estagiário</option>	            
	</select>
  </div>
  <input type="hidden" class="form-control" value= "<?php echo $resultado['id'] ;?>" name="id">
  
  
  
<button type="submit" class=" btn btn-lg btn-primary butao1"> <i class="fa fa-floppy-o fa-2x"></i> Salvar</button>
 
<a href="index.php?link=2"> <button type="button"  class="btn btn-lg btn-primary butao2"><i class="fa fa-search fa-2x" ></i> Pesquisar</button></a>
		
<a href="index.php"><button  type="button" class="btn btn-lg btn-primary butao3"><i class="fa fa-reply fa-2x"></i> Voltar</button></a>
</form>


       
        
			  