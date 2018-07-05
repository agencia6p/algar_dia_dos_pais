<?php

/**
 * @author Tiago Colucci
 * @copyright 2015
 */

if(isset($_REQUEST['action'])){ 
              
    include_once('core.php');
    
    foreach ($_POST as $campo => $valor){
        $$campo = nl2br(($valor));
    }
    error_reporting(0);    
    
    if($_POST['action'] == 'editConfig'){
        
        if(isset($trocarImg)){
            if($trocarImg == 1){                
                unlink("../../media/images/upload/".$imgOld);
                unlink("../../media/images/upload/".'_THUMB_'.$imgOld);
                
                $upload  = new upload($_FILES['arquivo']);
                $nomeImg = $upload->getNomeUpload();
            }
        }
        else{
            $nomeImg = $imgOld;
        }
        
        if(!isset($status)){
            $status = 0;
        }
        
        $instancia  = new config($empresa, $email, $chamada, $texto, $palavras, $descricao, $nomeImg);

        $empresa   = $instancia->getEmpresa();
        $email     = $instancia->getEmail();
        $chamada   = $instancia->getChamada();
        $texto     = $instancia->getTexto();
        $palavras  = $instancia->getPalavras();
        $descricao = $instancia->getDescricao();
        $img       = $instancia->getImg();
                
        $consulta = "update _institucional set    
        empresa = '$empresa', 
        email = '$email',
        chamada = '$chamada',
        texto = '$texto', 
        palavrasChave = '$palavras',
        descricao = '$descricao',
        img = '$img' where id = $id";
        
        $action = $instancia->action($consulta);
        
        if($action == true){ echo '<script>alert("Informações atualizadas com sucesso! \\\o/"); history.go(-1);</script>'; } 
        else { echo '<script>alert("Ocorreu um erro... >:("); history.go(-1);</script>'; }
        
        unset($instancia);
    }
}
?>