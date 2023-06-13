<head>
	<meta charset="utf-8">
	<meta lang="pl"> <!-- f tego nie wiem -->
	<title>Nasz sklep komputerowy</title>
	<link rel="stylesheet" type="text/css" href="./styl.css">
</head>
<body>
	<div class="top">
		<div class="menu">
			<ul>
				<li><a href="./index.html">Główna</a></li>
				<li><a href="./Procesory.html">Procesory</a></li>
				<li><a href="./ram.html">RAM</a></li>
				<li><a href="./grafika.html">Grafika</a></li>
			</ul>
		</div>
		<div class="logo">
			<h2>Podzespoły komputerowe</h2>
		</div>
	</div>
	<div class="content">
		<h1>Dzisiejsze promocje</h1>
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<?php
			$conn = mysqli_connect('localhost', 'root', '', 'egzaminbartek');
            $zp1 = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000";
            $result = $conn->query($zp1);
            foreach($result as $var){

                echo("<tr>".
                    "<td>".$var["id"]."</td>".
                    "<td>".$var["nazwa"]."</td>".
                    "<td>".$var["opis"]."</td>".
                    "<td class='cena-column'>".$var["cena"]."</td>"."</tr>");
            }
            $conn -> close();
			?>
		</table>
	</div>
	<div class="footer">
		<div class="f1">
			<img src="./scalak.jpg" alt="promocje na procesory">
		</div>
		<div class="f2">
			<h4>Nasz Sklep Komputerowy</h4>
			<p>Współpracujemy z hurtownią<a target="_blank" href="http://www.edata.pl/">edata</a></p>

		</div>
		<div class="f3">
			<p>zadzwoń: 601 602 603</p>
		</div>
		<div class="f4">
			<p>Stronę wykonał: PESEL</p>
		</div>
	</div>
</body>