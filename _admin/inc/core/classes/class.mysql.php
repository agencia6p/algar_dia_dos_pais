<?php

/**
 * @author Tiago Colucci
 * @copyright 2012
 */


class tiscMySql {
    public $erro;
    public $conection;
    
    public function __construct(){
        if(!($this->conection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))){   
            echo mysql_error();
            
            echo utf8_decode("Não foi possível conectar ao banco de dados MySQL. Favor contatar o webmaster.");
            exit;
        }

        if(!($con = mysql_select_db(DB_NAME))){
            echo utf8_decode("Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.");
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
        
        $this->error(mysql_error($this->conection));
        
        return $resultado;        
    }
    public function error($error){
        return $this->erro;
    }
    
    public function fetch_array($value){
        return mysql_fetch_array($value);
    }
    
    public function num_rows($value){
        return mysql_num_rows($value);
    }
    public function affected_rows($value){
        return mysql_affected_rows($value);
    }
}

?>

