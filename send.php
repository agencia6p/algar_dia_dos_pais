<?php
error_reporting(0);

include_once("_admin/tiscConfig.php");

function validarEmail($email){
    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
    if(preg_match($er, $email)){
		return true;
    }
    else{
		return false;
    }
}
function validarCPF($cpff){
	$cpff = str_pad(preg_replace('/[^0-9]/', '', $cpff), 11, '0', STR_PAD_LEFT);
	if ( strlen($cpff) != 11 || $cpff == '00000000000' || $cpff == '11111111111' || $cpff == '22222222222' || $cpff == '33333333333' || $cpff == '44444444444' || $cpff == '55555555555' || $cpff == '66666666666' || $cpff == '77777777777' || $cpff == '88888888888' || $cpff == '99999999999'){
		return false;
	}
	else { // Calcula os números para verificar se o CPF é verdadeiro
		for($t = 9; $t < 11; $t++) {
			for ($d = 0, $c = 0; $c < $t; $c++) {
				$d += $cpff{$c} * (($t + 1) - $c);
			}
			$d = ((10 * $d) % 11) % 10;
			if ($cpff{$c} != $d) {
				return false;
			}
		}
		return true;
	}
}
$erro = '';
if(isset($_POST['nome'])){
	foreach ($_POST as $campo => $valor){
        $$campo = trim(nl2br(($valor)));
    }
	
	if($nome == ""){ 
		$erro .= "O campo Nome está vazio. Por favor insira seu nome. \n"; 
	}
	if($email == ""){ 
		$erro .= "O campo E-mail está vazio. Por favor insira seu e-mail. \n";
	}
	/*if(!validarEmail($email)){ 
		$erro .= "E-mail inválido. Por favor verifique se digitou corretamente seu e-mail. \n";
	}
	if($cpf == ""){ 
		$erro .= "O campo CPF está vazio. Por favor insira seu CPF. \n";
	}
	if(validarCPF($cpf)){ 
		$erro .= "CPF inválido. Por favor verifique se digitou corretamente seu CPF. \n";
	}
	
	if($_FILES['arquivo'] == ""){
		$erro .= "O campo de Vídeo está vazio. Por favor selecione seu vídeo para participar da campanha. \n";
	}*/

	if(!empty($_FILES['arquivo'])){
		if($_FILES['arquivo']['size'] > 17825792){
			$erro .= "O arquivo selecionado ultrapassa o limite de 15MB. Por favor, selecione um arquivo de até 15MB. \n";
		}
	}
	if($mensagem == ""){ 
		$erro .= "O campo Mensagem está vazio. Por favor insira seu texto. \n";
	}

	if($erro != ''){		
		echo '<script>alert("'.$erro.'"); history.go(-1)</script>';
		exit;
	}
	else{
		$nome  		= antiInjection($nome);
		$email 		= antiInjection($email);
		$cpf   		= antiInjection($cpf);
		$mensagem   = antiInjection($mensagem);
		
		//**//

		if(mkdir($diretorioUpload.$cpf, 0777)){

			$nomeTxt = str_replace("-", "", $cpf);
			$nomeTxt = str_replace(".", "", $nomeTxt).".txt";
			$texto   = "
			Nome: $nome
			E-mail: $email
			CPF: $cpf
			Mensagem: $mensagem
			";
			
			$file = fopen($diretorioUpload.$cpf."/".$nomeTxt, 'a');
			fwrite($file, $texto);
			fclose($file);
			
			set_time_limit(0);

			//**//

			if(!empty($_FILES['arquivo'])){
				$arquivo  = Array();
				$arquivo  = $_FILES['arquivo'];    
	            $novoNome = $cpf."__".$arquivo['name'];
	            $novoNome = clear($novoNome);
	            $caminho  = $diretorioUpload.$cpf."/".$novoNome;

	            if(move_uploaded_file($arquivo['tmp_name'], $caminho)){

	            	$bd = new tiscMySql();
	            	
	            	if($bd->exec("insert into registros (data, nome, email, cpf, arquivo, mensagem) values (NOW(), '$nome', '$email', '$cpf', '$novoNome', '$mensagem')")){ 
	            		echo '<script>alert("Parabéns! Agora você está participando da promoção! Boa sorte! :)"); history.go(-1);</script>';
	            	}
	            	else{
	            		unlink($diretorioUpload.$cpf."/".$nomeTxt);
	            		unlink($diretorioUpload.$cpf."/".$novoNome);
	            		rmdir($diretorioUpload.$cpf);
	            		echo '<script>alert("Ocorreu algum erro na inserção dos dados informados. Por favor, tente novamente."); </script>';
	            	}
	            }
	            else{
	                echo '<script>alert("<o> Ocorreu algum erro durante o upload. Tente novamente em alguns instantes."); history.go(-1); </script>';
	            }
			}
			else{
				$bd = new tiscMySql();
	            	
            	if($bd->exec("insert into registros (data, nome, email, cpf, arquivo, mensagem) values (NOW(), '$nome', '$email', '$cpf', 'nenhum anexo', '$mensagem')")){ 
            		echo '<script>alert("Parabéns! Agora você está participando da promoção! Boa sorte! :)"); history.go(-1);</script>';
            	}
            	else{            		
            		echo '<script>alert("Ocorreu algum erro na inserção dos dados informados. Por favor, tente novamente."); </script>';
            	}
			}			
		}
		else{
			 echo '<script>alert("Esse CPF já está participando da promoção."); history.go(-1);</script>';
		}
	}
}
else{
	echo '<script>alert("Aconteceu algum erro. Mapeamos seu IP('.$_SERVER["REMOTE_ADDR"].') para verificarmos o que pode ter acontecido."); history.go(-1);</script>';
}

?>