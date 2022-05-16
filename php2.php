<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esempio di uso di array in PHP</title>
    </head>
    <body>
        <?php
          echo '<h1 style="text-align: center;">Esempio di uso di array</h1>';

          echo "<h3>Assegnazione e stampa dell'array (10,30,20,40,50)</h3>";
          $s1=array(10,30,20,40,50);
          for ($i=0;$i<5;$i++) {
            echo "$s1[$i] ";
          }

          echo "<h3>Ordinamento e stampa dell'array precedente</h3>";
          sort($s1);
          for ($i=0;$i<5;$i++) {
            echo "$s1[$i] ";
          }

          echo '<h3>Assegnazione e stampa di un array associativo</h3>';
          $s1=array("Lun"=>17.5, "Mer"=>16.8, "Mar"=>14.9);
          foreach ($s1 as $nome => $valore) {
            echo"$nome, $valore ";
          }

          echo "<h3>Ordinamento e stampa dell'array precedente</h3>";
          ksort($s1);
          foreach ($s1 as $nome => $valore) {
            echo"$nome, $valore ";
          }
        ?>
    </body>
</html>
