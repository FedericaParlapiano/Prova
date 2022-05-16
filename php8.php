<?php
  include("include/connect.php");
  $dsn = "mysql:host=$HOST;dbname=$DB;charset=UTF8";
  try {
      $pdo = new PDO($dsn, $USER, $PASSWORD);
  } catch (PDOException $e) {
      echo "Errore!: " . $e->getMessage();
      exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Visualizza Dati DB</title>
    </head>
    <body>
        <h1 style="text-align: center;">Visualizzazione record nella tabella Libri</h1>
        <table border style="background-color:#ffffcc; border-collapse:collapse;">
            <tr><th>Codice</th><th>Titolo</th><th>Autore</th><th>Prezzo</th><th>Data Ultima Vendita</th></tr>
            <?php
              $books = $pdo->query('SELECT * FROM libri');
              foreach ($books->fetchAll(PDO::FETCH_OBJ) as $book) {
                  echo "<tr>
                        <td>$book->codice</td>
                        <td>$book->titolo</td>
                        <td>$book->autore</td>
                        <td>$book->prezzo</td>
                        <td>$book->data_vendita</td>
                        </tr>";
              };
              $books = null;
              $pdo = null;
            ?>
        </table>
    </body>
</html>