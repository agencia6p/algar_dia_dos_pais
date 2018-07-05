<?php

/**
 * @author Tiago Colucci
 * @copyright 2012
 */


function converteData($tipo, $data){
    /* 
    tipo 1 = 12/12/2012
    tipo 2 = 1212-12-12
    */
    
    if($tipo == 1){
        $dataA    = explode("/", $data);
        $dataNova = $dataA[2]."-".$dataA[1]."-".$dataA[0];    
        return $dataNova; 
    }
    if($tipo == 2){
        $dataA    = explode("-", $data);
        $dataNova = $dataA[2]."/".$dataA[1]."/".$dataA[0];
        return $dataNova;
    }   
    if($tipo == 3){
         $dataA    = explode("-", $data);
         
         if($dataA[1] == 1){ $mess = "Janeiro"; }
         if($dataA[1] == 2){ $mess = "Fevereiro"; }
         if($dataA[1] == 3){ $mess = "Março"; }
         if($dataA[1] == 4){ $mess = "Abril"; }
         if($dataA[1] == 5){ $mess = "Maio"; }
         if($dataA[1] == 6){ $mess = "Junho"; }
         if($dataA[1] == 7){ $mess = "Julho"; }
         if($dataA[1] == 8){ $mess = "Agosto"; }
         if($dataA[1] == 9){ $mess = "Setembro"; }
         if($dataA[1] == 10){ $mess = "Outubro"; }
         if($dataA[1] == 11){ $mess = "Novembro"; }
         if($dataA[1] == 12){ $mess = "Dezembro"; }
         
         $dataNova = $dataA[2]." de ".$mess." de ".$dataA[0];
         return $dataNova;
    }
    if($tipo == 4){
        if($dataA[1] == 1){ $mess = "JAN"; }
        if($dataA[1] == 2){ $mess = "FEV"; }
        if($dataA[1] == 3){ $mess = "MAR"; }
        if($dataA[1] == 4){ $mess = "ABR"; }
        if($dataA[1] == 5){ $mess = "MAI"; }
        if($dataA[1] == 6){ $mess = "JUN"; }
        if($dataA[1] == 7){ $mess = "JUL"; }
        if($dataA[1] == 8){ $mess = "AGO"; }
        if($dataA[1] == 9){ $mess = "SET"; }
        if($dataA[1] == 10){ $mess = "OUT"; }
        if($dataA[1] == 11){ $mess = "NOV"; }
        if($dataA[1] == 12){ $mess = "DEZ"; }
        
        $dataNova = '<div class="blog-item-date">'.$dataA[2].'</div>
                     <div class="blog-item-mounth">'.$dataA[1].'</div>';
        return $dataNova;
    }
}

function antiInjection($texto){
    $texto = strtolower($texto);
	$texto = str_replace("select",   "", $texto);
	$texto = str_replace("from",     "", $texto);
	$texto = str_replace("where",    "", $texto);
    $texto = str_replace("order",    "", $texto);
    $texto = str_replace("by",    "", $texto);
    $texto = str_replace("/",    "", $texto);
	$texto = str_replace("insert",   "", $texto);
	$texto = str_replace("update",   "", $texto);
	$texto = str_replace("delete",   "", $texto);
	$texto = str_replace("drop",     "", $texto);
	$texto = str_replace("and",      "", $texto);
	$texto = str_replace("'",      "\'", $texto);
	$texto = str_replace("database", "", $texto);
	$texto = str_replace("img",      "", $texto);
    $texto = str_replace("%20",      "&", $texto);
    
	return $texto;
}

function clear($string){
     $string = ereg_replace("[^a-zA-Z0-9_.]", "", strtr($string, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
     return $string;
}

function login($usuarioa, $senhaa){
    $login = antiInjection($usuarioa);
    $senha = antiInjection($senhaa);
            
    $bd = new tiscMySql();
    
    $consulta = $bd->exec("select * from _admin WHERE user = '$login' AND senha = '$senha'");
    
    $i = 0;
    while($x = $bd->fetch_array($consulta)){
        $i = $i + 1;
    }
    if($i == 1){
        @session_start();
        @$_SESSION['sessaoPainel'] = "LoremIpsumDolor:)";           
    	echo '
          <script type="text/javascript">
	         window.location.href = "index-painel.php";
          </script>';	 
    }
    else{
         echo ' <script>alert("Dados incorretos. Tente novamente."); history.go(-1);</script>';
    } 
    unset($bd);     

}

?>