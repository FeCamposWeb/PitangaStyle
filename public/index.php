<?php

use core\classes\Database;
use core\classes\Functions;

//abrir a sessão

session_start();

//Carregar o config
require_once('../config.php');

require_once('../vendor/autoload.php');

$a = new Database();
$b = new Functions();

$b->teste();

echo 'ok';

?>