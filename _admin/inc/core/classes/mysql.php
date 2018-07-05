<?php

/**
 * @author Tiago Colucci
 * @copyright 2010
 * mysqli.php | classe par manipula��o de banco de dados
 */   
include_once "config.php"; 
include_once "antiInjection.php";

class db {
    private $erro;
    
    public function __construct(){

        if(!($id = @mysql_connect(HOST, BD_USUARIO, BD_SENHA)))
        {   
            echo mysql_error();
            echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
            exit;
        }

        if(!($con = mysql_select_db(BD, $id))) {
            echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
            echo mysql_error();
            exit;
        }
    }
    
    public function __destruct(){
       // mysql_close();
    }       
    public function fechar(){
        mysql_close();
    }        
    public function exec($sql){
        $resultado = mysql_query($sql);
        return $resultado;

        $this->erro = mysql_error($id);
    }
    public function erro($error){
        return $this->erro;
    }
    public function fetch_array($value){
        return mysql_fetch_array($value);
    }
    public function num_linhas($value){
        return mysql_num_rows($value);
    }
    public function num_rows($value){
        return mysql_num_rows($value);
    }
    public function affected_rows($value){
        return mysql_affected_rows($value);
    }
}
?>