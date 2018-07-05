<?php

/**
 * @author Tiago Colucci
 * @copyright 2015
 */
 
class config{
    
    private $empresa;
    private $email;
    private $chamada;
    private $texto;
    private $palavras;
    private $descricao;
    private $img;
    
    public function __construct($empresa = false, $email = false, $chamada = false, $texto = false, $palavras = false, $descricao = false, $img = false){
        include_once("../tiscConfig.php");
        
        $this->setEmpresa($empresa);
        $this->setEmail($email);
        $this->setChamada($chamada);
        $this->setTexto($texto);
        $this->setPalavras($palavras);
        $this->setDescricao($descricao);
        $this->setImg($img);
    }
    
    /* @titulo */   
    private function setEmpresa($valor){ $this->empresa = $valor; }
    public function getEmpresa(){ return $this->empresa; }
    
    /* @titulo */   
    private function setEmail($valor){ $this->email = $valor; }
    public function getEmail(){ return $this->email; }
    
    /* @titulo */   
    private function setChamada($valor){ $this->chamada = $valor; }
    public function getChamada(){ return $this->chamada; }
    
     /* @texto */   
    private function setTexto($valor){ $this->texto = $valor;  }
    public function getTexto(){ return $this->texto; }
    
    /* @titulo */   
    private function setPalavras($valor){ $this->palavras = $valor; }
    public function getPalavras(){ return $this->palavras; }
    
    /* @titulo */   
    private function setDescricao($valor){ $this->descricao = $valor; }
    public function getDescricao(){ return $this->descricao; }
    
    /* @titulo */   
    private function setImg($valor){ $this->img = $valor; }
    public function getImg(){ return $this->img; }
   
    public function action($sql){       
        $bd = new tiscMySql();
        
        if($bd->exec($sql)){ return true; }
        else { return $bd->erro; }        
    }
}

/**/

class upload{

    private $arq = Array();
    private $id;
    private $qtd;
    private $nomeNo;
    
    public $nameArq;    
    
    public function __construct($arquivo){
        $this->arq    = $arquivo;
        $this->qtd    = 1;

        $this->uploadImagem();
    }

    private function uploadImagem(){
        set_time_limit(0);

        include_once("../tiscConfig.php");

        for($i = 0; $i <= $this->qtd; $i++){ // começo um laço que irá ser executado
            
            if(!empty($this->arq['name'][$i])){
                
                $novoNome  = md5(md5(date('dmY').time()).$this->arq['tmp_name'][$i]);
                
                $nomeLimpo   = clear($this->arq['name'][$i]);
                $caminho[$i] = $diretorioUpload.$novoNome.$nomeLimpo;
                $arqNome = $novoNome.$nomeLimpo;
                
                if(move_uploaded_file($this->arq['tmp_name'][$i], $caminho[$i])){                        
                    
                    list($largura, $altura, $tipo) = getimagesize($caminho[$i]);
                    
                    $new_width         = $larguraThumb;
                    $new_height        = ($altura * $new_width)/$largura;
                    
                    $imagem_criada     = imagecreatefromjpeg($caminho[$i]);
                    $thumb             = imagecreatetruecolor($new_width, $new_height);
                    
                    $caminhoThumb[$i]  = $diretorioUpload.'_THUMB_'.$novoNome.$nomeLimpo;                         
                    $imgNome           = $novoNome.$nomeLimpo;
                    
                    imagecopyresampled($thumb, $imagem_criada, 0, 0, 0, 0, $new_width, $new_height, $largura, $altura);
                    imagejpeg($thumb, $caminhoThumb[$i]);
                    
                    $this->setNomeUpload($imgNome);
                }
                else{
                    echo '<script>alert("Ocorreu algum erro durante o upload da imagem... <o>"); history.go(-1)</script>';
                }
            }
        }// fim do for
    }
    
    private function setNomeUpload($val){
        $this->nomeNo = $val; 
    }
    public function getNomeUpload(){
        return $this->nomeNo;
    }
}

?>