<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twoj wskaznik bmi Paweł Żyła</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h2>Oblicz wskaźnik BMI*</h2>
    </header>
    <section>
        <section>
            <img src="wzor.png" alt="Liczymy BMI">
        </section>
        <section>
            <img src="rys1.png" alt="Tabela kalorii">
</section>
        <section>
            <h1>Podaż dane</h1>
            <form action="waga.php" method="POST">
                <label for="waga">Waga:</label>
                <input type="number" id="waga" name="waga" required>
                <br>
                <label for="wzrost">Wzrost:</label>
                <input type="number" id="wzrost" name="wzrost" required>
                <br>
                <button type="submit">Licz BMI</button>
            </form>
            <?php
                if (isset($_POST['waga']) && isset($_POST['wzrost'])) {
                    $waga = $_POST['waga'];
                    $wzrost = $_POST['wzrost'] / 100;
                    $bmi = $waga / ($wzrost * $wzrost);
                    echo "<p>Twoje BMI wynosi: " . round($bmi, 2) . "</p>";
                }
            ?>
        </section>
    </section>
    <main>
        <table>
            <thead>
                <tr>
                    <th>lp.</th>
                    <th>interpretacja</th>
                    <th>zaczyna się od</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Niedowaga</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Waga prawidłowa</td>
                    <td>18,5</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nadwaga</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Otyłość</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
            </main>
                <footer>
                    Pan Paweł bedzie skakał
                </footer>
        </body>
</html>