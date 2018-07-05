<?php
// ** Configurações do MySQL ** //
/** O nome do banco de dados  */
define('DB_NAME', 'algarsonhomae');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'web6p');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados.  */
define('DB_COLLATE', '');

define('TISC_PATH', dirname(__FILE__) . '/');

include_once(TISC_PATH . "/inc/core/classes/class.mysql.php");
include_once(TISC_PATH . "/functions.php");

//$bd = new tiscMySql();

$baseUrl            = 'http://localhost/algar-maes/';
$baseUrlAdmin       = 'http://localhost/algar-maes/_admin/';
$diretorioUpload    = 'media/uploads/';
$webmaster          = 'Tiago Colucci';
$emailWebmaster     = 'tiago.colucci@6p.com.br';
$creditos           = '6P Marketing & Propaganda';

$larguraThumb       = 580;

?>