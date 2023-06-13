<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" type="text/css" href="styl1.css">
  </head>
  <body>
    <header>
      <h1>Portal Ogłoszeniowy</h1>
    </header>
    <div class="content">
    <nav>
      <h2>Kategorie ogłoszeń</h2>
      <ol>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
      </ol>
      <img src="./ksiazki.jpg" alt="Kupię / sprzedam książkę">
      <table>
        <tr>
          <td>Liczba ogłoszeń</td>
          <td>Cena ogłoszenia</td>
          <td>Bonus</td>
        <tr>
          <td>1-10</td>
          <td>1 PLN</td>
          <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
        </tr>
        <tr>
          <td>11-50</td>
          <td>0,80 PLN</td>
        </tr>
        <tr>
          <td>51 i więcej</td>
          <td>0,60 PLN</td>
        </tr>

      </table>
    </nav>
    <nav>
      <h2>Ogłoszenia kategorii książki</h2>
      <?php
         // Your code for connecting to a database here
      ?>
    </nav>
    </div>
    <footer>
      <p>Portal ogłoszeniowy opracował: 06231010911</p>
    </footer>
  </body>
</html>
