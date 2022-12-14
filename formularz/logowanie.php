<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <header>
        Strona logowanie
    </header>
    <form method="post" action="#">
    <form>
        <label for="login">Podaj login</label>
        <input type="text" name="login" id="login">
        <br>
        <label for="pass">Podaj hasło</label>
        <input type="password" name="pass" id="pass">
        <br>
        <label for="pass2">Powtórz hasło hasło</label>
        <input type="password" name="pass2" id="pass2">
        <br>
        <input type="submit">

    </form>
    <?php 
        $login=$_POST['login'];
        $login=$_POST['pass'];
        $login=$_POST['pass2'];
        echo "<p>$login,$pass,$pass2 </p>";

    ?>
    <footer>
        Strone przygotował Paweł
    </footer>
</body>
</html>