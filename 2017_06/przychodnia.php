<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./przychodnia.css">
</head>
<body>
    <div class="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div class="panele">
        <div class="lewy">
            <h3>LISTA PACJENTÓW</h3>
            <?php
                    $conn = mysqli_connect("localhost","root","","przychodnia");
                    $query = "SELECT id, imie, nazwisko FROM Pacjenci;";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo $row['id']. ' '. $row['imie']. ' '. $row['nazwisko']. '</br>';
                    }
                    $die = mysqli_close($conn)
                ?>
            <br>
            <br>
            <form method="post" action="./pacjent.php">
                <label for="id">Podaj id:</label>
                <input type="number" name="id" id="id">
                <button type="submit">Pokaż dane</button>
            </form>
            <h3>LEKARZE</h3>
            <ul>
                <li>
                    pn - śr
                    <ol>
                        <li>Anna Kwiatkowska</li>
                        <li>Jan Kowalewski</li>
                    </ol>
                    <li>
                        czw - pt
                        <ol>
                            <li>Krzysztof Nowak</li>
                        </ol>
                    </li>
                </li>
            </ul>
        </div>
        <div class="prawy">
            <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <p>Brak wybranego pacjenta</p>
        </div>
    </div>
    <div class="stopka">
        <p>utworzone przez: 06231010911</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>