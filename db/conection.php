<?php

try {

    $bd = new mysqli('localhost', 'root', '', 'db_CakeShop');
    $bd->set_charset('utf8');

} catch (Exception $e) {
    throw new Exception("Error at Conecting Request" + $e->getMessage());
}

?>