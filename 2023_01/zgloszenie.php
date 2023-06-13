<?php
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $conn =  mysqli_connect('localhost', 'root', '', 'wedkarstwo');
    $query = "INSERT INTO zawody_wedkarskie VALUES (null, 0,". $lowisko. ','.  '"'. $data. '"'.','. '"'. $sedzia. '"'. ")";
    $result = mysqli_query($conn, $query);
    $die = mysqli_close($conn);
?>