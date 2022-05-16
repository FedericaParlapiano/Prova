<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esempio di uso di funzioni in PHP</title>
        <?php

          // Passaggio di Parametri per valore
          function vswap ($x, $y) {
            $tmp=$x;
            $x=$y;
            $y=$tmp;
          }

          // Passaggio di Parametri per riferimento
          function rswap (&$x, &$y) {
            $tmp=$x;
            $x=$y;
            $y=$tmp;
          }

          // Uso di variabili globali
          function x_alla_y ($y) {
            global $x;
            $tmp=1;
            for ($i=1;$i<=$y;$i++) {
              $tmp*=$x;
            }
            return $tmp;
          }
        ?>
    </head>
    <body>
        <?php
          echo '<h1 style="text-align: center;">Esempio di uso di funzioni</h1>';

          echo '<h3>Funzione swap con parametri passati per valore</h3>';
          $x=3;$y=5;
          echo "<p>Prima dell'attivazione x=$x, y=$y</p>";
          vswap($x,$y);
          echo "<p>Dopo l'attivazione x=$x, y=$y</p>";

          echo '<h3>Funzione swap con parametri passati per riferimento</h3>';
          $x=3;$y=5;
          echo "<p>Prima dell'attivazione x=$x, y=$y</p>";
          rswap($x,$y);
          echo "<p>Dopo l'attivazione x=$x, y=$y</p>";

          echo '<h3>Funzione che usa variabili globali</h3>';
          $x=3;$y=5;
          $ris=x_alla_y($y);
          echo "<p>Valore di $x elevato alla $y=$ris</p>";
        ?>
    </body>
</html>