<?php
    $conn = mysqli_connect("localhost","root","","dane");
    $tytul = $_POST['tytul'];
    $gatunek = $_POST['gatunek'];
    $rok = $_POST['rok'];
    $ocena = $_POST['ocena'];

    $query = "INSERT INTO filmy VALUES (8,". $gatunek. ','. "3,". '"'. $tytul. '"' .','. $rok. ','. $ocena. ")";
    $result = mysqli_query($conn, $query);
    echo "Film ". $tytul ." został dodany do bazy";
    $die = mysqli_close($conn)
?>