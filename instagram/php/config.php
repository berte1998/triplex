<?php

$host = 'localhost'; //HOST NAME.
$db_name = 'instagram'; //Database Name
$db_username = 'root'; //Database Username
$db_password = ''; //Database Password


try
{
    $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);

    mysql_connect('localhost','root','');
    mysql_select_db('instagram');
}
catch (PDOException $e)
{
    exit('Error Connecting To DataBase');
}

?>