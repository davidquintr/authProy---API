<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once('../connection.php');
    $my_query = 'select * from usuario';

    require_once('../generical_return.php');

    $mysql->close();
}

?>