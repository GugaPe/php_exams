<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkoła Ponadgimnazjalna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>
    <div class="cotent">
        <div class="lewy">
            <h2>List uczniów: </h2>
            <ol>
                <?php
                    $conn = mysqli_connect('localhost','root','','baza1');
                    $query = "SELECT imie, nazwisko FROM uczen";
                    $results = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($results)){
                        echo '<li>'.$row['imie'].' '.$row['nazwisko'].'</li>';
                    };
                ?>
            </ol>
        </div>
        <div class="prawy">
            <?php
                $conn = mysqli_connect('localhost','root','','baza1');
                $query = "SELECT imie, nazwisko FROM uczen WHERE id = 2";
                $results = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($results)){
                    echo '<h2>Uczeń: '.$row['imie'].' '.$row['nazwisko'].'</h2>';
                };
            ?>
            <?php
                $conn = mysqli_connect('localhost','root','','baza1');
                $query = "SELECT AVG(ocena) AS avg_ocena FROM ocena WHERE uczen_id = 2 AND przedmiot_id = 1";
                $results = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($results)){
                    echo '<p>Średnia ocena z języka polskiego: '.$row['avg_ocena'].'</p>';
                };
            ?>
        </div>
    </div>
    <div class="stopka">
        <h3>Zespół szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował: 0623101911</p>
    </div>
</body>
</html>