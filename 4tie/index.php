<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połaczenie z baza </title>
</head>
<body>
    <header><h1>Połaczenie z baza danych </h1></header>
    <main>
        <h2>ustuwione połaczenie</h2>
        <p>$poloczenie=mysqli_connwct('adres bazy', 'uzytkownik', 'haslo' , 'nazwa bazy')</p>
        <h2>Sprawdzanie czy podłaczylismy sie do bazy</h2>
        <p>if (!polaczenie){}</p>
        <h2>wykonanie zapytania zapisanie wyniku do zmiennej</h2>
        <p>$zmienna=mysqli_query($poloczenie, 'zapytanie SQL'</p>
        <h2>Wyswietlanie wyniku zapytania na stronie</h2>
        <p>while ($wiersz=mysqli_fetch_array($zmienna)) <br>
        { <br>
            echo @wiersz['nazwa kolumny']." ".$row['nazwa kolumny drugiej']<br>
        }

            </p>
            <h2>Zamkniecie polaczenia danych</h2>
            <p>mysqlo_close($poloczenie)</p>
            <div>
                <h2>Testowe polaczenie z baza danych</h2>
                <?php 
                $poloczenie=mysqli_connect('localhost', 'root', '' , 'ksiegarnia4tie');
                if ($poloczenie)
                {
                    echo "polaczylismy sie z baza danych";
                }
                else
                {
                    exit("bład poloczenia z baza");
                }
                ?>
    </main>
    <footer>strone zrobił paweł</footer>
    
</body>
</html>