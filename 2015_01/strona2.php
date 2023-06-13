<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROSTE DZIAŁANIA</h1>
    <form action="" method="POST">
        <div class="input1">
        <p>Podaj podstawę potęgi</p>
        <input type="number" name="firstNumber" id="firstNumber" />
        </div>
        <div class="input2">
        <p>Podaj dodatni, całkowity wykładnik potęgi</p>
        <input type="number" name="secondNumber" id="secondNumber" />
        </div>
        <button type="submit">POTĘGOWANIE</button>
    </form>
    <?php
        $number_to_power = intval($_POST['firstNumber']);
        $power = intval($_POST['secondNumber']);
        

        if($power < 0){
            echo('<p>nie mozna liczby mniejszej od 0!</p>');
        } elseif($number_to_power == '' || $power == ''){
            echo('<p>nie wprowadziłeś danych</p>');
        } else {
            $number = pow($number_to_power, $power);
            echo('<p>'.$number.'</p>');
        };

    ?>
</body>
</html>