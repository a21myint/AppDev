<?php

$host ='localhost';
$db ='shop';
$user ='root';
$password ='';
$dsn ="mysql:host=$host; dbname=$db";

try{

$pdo = new PDO($dsn,$user,$password);


}catch(PDOException $e)
{
echo (" some problem occurs");
echo $e->getMessage();


}






?>