<?php 
$host ="localhost";
$username ="MateuszBulanda";
$password ="root";
$dbname ="warsztaty";
$port ="3306";

$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

if (mysqli_connect_errno()!=0){
    echo("błąd połączenia do bazy danych");
} else{
    echo("połączono do bazy danych");
}
?>