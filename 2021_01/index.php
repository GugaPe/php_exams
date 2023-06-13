<head>
	<meta charset="utf-8">
	<meta lang="pl">
	<title>Nasz sklep komputerowy</title>
	<link rel="stylesheet" type="text/css" href="./styl.css?version=2">
</head>
<body>
	<div class="top">
		<div class="logo">
			<h2>Sklep komputerowy</h2>
		</div>
		<div class="menu">
			<ul>
				<li><a href="./index.php">Główna</a></li>
				<li><a href="./Procesory.html">Procesory</a></li>
				<li><a href="./ram.html">RAM</a></li>
				<li><a href="./grafika.html">Grafika</a></li>
				<li><a href="./hdd.html">HDD</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<h2>Lista aktualnie dostępnych podzespołów</h2>
		<table>
			<tr>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sklep');
            $zp1 = "SELECT nazwa, opis, cena FROM podzespoly WHERE dostepnosc = TRUE";
            $result = $conn->query($zp1);
            foreach($result as $var){

                echo("<tr>".
                    "<td>".$var["nazwa"]."</td>".
                    "<td>".$var["opis"]."</td>".
                    "<td>".$var["cena"]."</td>"."</tr>");
            }
            $conn -> close();
			?>
		</table>
	</div>
	<div class="footer">
		<div class="f1">
			<h3>Sklep Komputerowy</h3>
			<p>ul. Legnicka 61, Wrocław</p>
			<p>Współpracujemy z hurtownią<a target="_blank" href="http://www.ddata.pl/">ddata</a></p>
		</div>
		<div class="f2">
			<p>Stronę wykonał: 06231010911</p>
		</div>
		<div class="f3">
			<p>zadzwoń: 71 506 50 60</p>
		</div>
		<div class="f4">
			<img src="./scalak.jpg" alt="promocje na procesory">
			
		</div>
	</div>
</body>