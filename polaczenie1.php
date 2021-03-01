<?php

/**
 * Połączenie do bazy danych mysql za pomocą klasy mysqli
 * Tworze nowy obiekt $polaczenie za pomocą konstruktora new mysqli
 */
$host ="localhost";//nazwa domenowa,ip
$username ="root";//nazwa użytkownika z uprawnieniami do bazy danych
$password ="";//hasło dostępu do bazy danych
$dbname ="MateuszBulanda";//nazwa bazy danych
$port = 3306;//opcjonalnie port

//tworzenie połączneia
$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

if (mysqli_connect_errno()!=0){
    echo("błąd połączenia do bazy danych".mysqli_connect_error);
} else{
    echo("połączono do bazy danych");
}


?>