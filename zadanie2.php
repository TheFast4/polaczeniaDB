<?php include_once("polaczenie2.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!---
    utwórz baze danych o nazwie warsztaty
    zawiera 2 tabele
    1-samochody(3 atrybuty)
    2-komputery(id marka nazwa)
    wykonaj polaczenie do bazy danych
    utwórz użytkownika
    pobierz wszystkie rekordy z tabeli
-->
<style>
div{
    width:400px;
    margin:auto;
}
table,tr,td{
    border: 1px black solid;
}
</style>
<div>
<table>
<tr><td>IDS</td><td>Marka</td><td>nazwa</td></tr>
<?php 
$zapytanie = $polaczenie->query("SELECT ids,marka,nazwa FROM samochody");
while( list($ids,$marka,$nazwa) = mysqli_fetch_array($zapytanie)){
    echo("
            <tr><td>$ids</td><td>$marka</td><td>$nazwa</td></tr>
    ");
    }
?>


</table>
</div>
<hr>
<div>
<table>
<tr><td>IDK</td><td>Marka</td><td>nazwa</td></tr>
<br>
<?php 
$zapytanie = $polaczenie->query("SELECT idk,marka,nazwa FROM komputery");
while($wiersz = $zapytanie->fetch_assoc()){
    echo(" <tr><td>$wiersz[idk]</td><td>$wiersz[marka]</td><td>$wiersz[nazwa]</td></tr>
    ");}
?>
</table>
</div>
</body>
</html>
<?php $polaczenie->close();?>