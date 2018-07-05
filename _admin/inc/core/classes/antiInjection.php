<?php

/**
 * @author Tiago Colucci | Todos os direitos reservados | 
 * @copyright 29-12-2009
 * @version 09.12 
 * @name class.antiInjection.php | Classe para evitar SQL Injection |
 */

class antiInjection{
	
	private $valor;
	
	public $crip;
	public $decrip;
	
	public static function limpa($texto){

		$texto = str_replace("SELECT",   "", $texto);
		$texto = str_replace("FROM",     "", $texto);
		$texto = str_replace("WHERE",    "", $texto);
		$texto = str_replace("INSERT",   "", $texto);
		$texto = str_replace("UPDATE",   "", $texto);
		$texto = str_replace("DELETE",   "", $texto);
		$texto = str_replace("DROP",     "", $texto);
		$texto = str_replace("AND",      "", $texto);
		$texto = str_replace("'",      "\'", $texto);
		$texto = str_replace("DATABASE", "", $texto);
		$texto = str_replace("img",      "", $texto);
	
		return $texto;
	}
	
	public function encript($valor){
	
		$this->valor = $valor;
		$this->limpa($this->valor);
		
		$this->valor = $this->limpo;
		$this->valor = base64_encode(base64_encode($this->valor));
		
		$this->valor = str_replace("=", "\-/", $this->valor);
		$this->valor = str_replace("A", "|", $this->valor);
		$this->valor = str_replace("T", "_", $this->valor);
		$this->valor = str_replace("Q", "]", $this->valor);
		
		$this->crip  = $this->valor;	
	}
	
	public function decript($valor){
	
		$this->valor = $valor;
		$this->limpa($this->valor);
		
		$this->valor = $this->limpo;
		
		$this->valor = str_replace("]", "Q", $this->valor);
		$this->valor = str_replace("_", "T", $this->valor);
		$this->valor = str_replace("|", "A", $this->valor);
		$this->valor = str_replace("\-/", "=", $this->valor);
		
		$this->valor = base64_decode(base64_decode($this->valor));		
		
		$this->decrip  = $this->valor;	
	}

    public static function removeAcentos($texto){
        $string = $texto;
        $texto  = strtr($string,"¦©¬‘µ·»¼¾ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ",
               "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
    	$texto = str_replace(",", "-", $texto);
        $texto = str_replace(" ", "-", $texto);
	    $texto = strtolower($texto);
        
        return $texto;		
    }		
}

?>
