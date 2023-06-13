<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artykuły papiernicze</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>
    <div class="content">
        <div class="lewy">
            <h2>kontakt</h2>
            <p>telefon: 444333222 <br> e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="./../promocja.png">
        </div>
        <div class="srodkowy">
            <h2>Promocja 10% obejmuje artykuły:</h2>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'sklep');
                $query = 'SELECT nazwa FROM towary WHERE promocja = 1';
                $sql = mysqli_query($conn, $query);
                echo '<ul>';
                while($row = mysqli_fetch_array($sql)) {
                    echo '<li>' . $row['nazwa'] . '</li>';
                }
                echo '</ul>';
                mysqli_close($conn)
            ?>
        </div>
        <div class="prawy">
            <h2>Cena wybranego artykułu w promocji</h2>
            <form action="">
                <select name='select'>
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <button type="submit">Wybierz</button>
            </form>
            <?php
                $select_value = $_GET['select'];
                $conn = mysqli_connect('localhost', 'root', '', 'sklep');
                $query = 'SELECT cena from towary WHERE nazwa = "' . $select_value . '"';
                $sql = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($sql);
                $cena = $row['cena'];
                $promocja = round($cena*0.9, 2);
                echo $promocja;
                mysqli_close($conn)
            ?>
        </div>
    </div>
    <div class="stopka">
        <h3>Autor strony: 06231010911</h3>
    </div>
</body>
</html>