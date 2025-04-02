<?php

function conexion(){

$host = "host=dpg-cvmpjdnfte5s739b5120-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_by6w";
$user = "user=charly";
$password = "password=4benvCzdpeW6BquD3R8dYOargkA0LMZL";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>