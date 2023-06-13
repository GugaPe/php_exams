<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styl.css?version=2">
</head>
<body>
    <div class="gora">
        <div class="tytul">
            <h1>Czas na grzyby</h1>
        </div>
        <div class="miniatura">
            <a href="./podgrzybek.jpg"><img src="./podgrzybek-miniaturka.jpg" alt="Grzybobranie"></a>
        </div>
    </div>
    <div class="content">
        <div class="lewy">
            <h3>Grzyby jadalne!</h3>
            <?php 
                $conn = mysqli_connect('localhost','root','','grzybobranie');
                $query = "SELECT id, nazwa, potoczna FROM grzyby WHERE jadalny = TRUE";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo '<p>'. $row['id']. '. '. $row['nazwa']. ' ('. $row['potoczna'] . ')</p>';
                };
            ?>
            <h3>Polecamy do zup</h3>
            <ul>
                <?php 
                    $query = 'SELECT g.potoczna AS potoczna, r.nazwa AS nazwa FROM grzyby AS g JOIN rodzina AS r ON g.rodzina_id = r.id JOIN potrawy AS p on g.potrawy_id = p.id WHERE p.nazwa = "Zupa"';
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '<li>'. $row['potoczna']. ', rodzina:'. $row['nazwa']. '</li>';
                    };
                ?>
            </ul>
        </div>
        <div class="prawy">
            <?php 
                $query = 'SELECT nazwa_pliku, nazwa FROM grzyby';
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo '<img src="./'. $row['nazwa_pliku']. '"'. ' title="'. $row['nazwa']. '">';
                };
            ?>
        </div>
    </div>
    <div class="stopka">
        <p>Autor: 06231010911</p>
    </div>
</body>
</html>