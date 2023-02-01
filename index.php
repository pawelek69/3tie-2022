<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <label for="imie">Podaj imie </label>
        <input type="text" name="imie" id="imie">
        <br>
        <label for="nazwisko">Podaj nazwisko </label>
        <input type="text" name="nazwisko" id="nazwisko">
        <br>
        <label for="pesel">Podaj pesel</label>
        <input type="text" name="pesel" id="pesel">
        <br>
        <input type="submit" value="zapisz">
</form>
<?php
    $polaczenie=mysqli_connect('localhost','root','','4tie');
    if($polaczenie){
        $imie=$_POST['imie'];
        echo $imie;
    }


?>



</body>
</html>