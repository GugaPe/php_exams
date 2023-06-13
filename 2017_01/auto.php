<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="./auto.css">
</head>
<body>
    <div class="baner">
        <h1>SAMOCHODY</h1>
    </div>
    <div class="panele">
        <div class="lewy">
            <h2>Wykaz samochodów</h2>
            <ul>
                <?php
                    $conn = mysqli_connect("localhost","root","","Komis");
                    $query = "SELECT id, marka, model FROM Samochody";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '<li>'. $row['id']. ' '. $row['marka']. ' '. $row['model']. '</li>';
                    }
                ?>
            </ul>
            <h2>Zamówienia</h2>
            <ul>
                <?php
                $query = "SELECT Samochody_id, Klient FROM Zamowienia";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo '<li>'. $row['Samochody_id']. ' '. $row['Klient']. '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="prawy">
            <h2>Pełne dane: Fiat</h2>
            <?php
                $query = 'SELECT * FROM Samochody WHERE marka = "Fiat"';
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo $row['id']. ' / '. $row['marka']. ' / '. $row['model']. ' / '. $row['rocznik']. ' / '. $row['kolor']. ' / '. $row['stan']. ' / ';
                }
                $die = mysqli_close($conn)
                ?>
        </div>
    </div>
    <div class="stopka">
        <table>
            <tr>
                <td><a href="./kwerendy.txt">Kwerendy</a></td>
                <td>Autor: 06231010911</td>
                <td><img src="./auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </div>
</body>
</html>