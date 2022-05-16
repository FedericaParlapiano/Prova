
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esempio di uso della funzione FOREACH in PHP</title>
        <?php

          // Stampa i valori degli elementi di un array
          function stampa_val ($a) {
            foreach($a as $val) {
              echo"$val, ";
            }
            echo'<br>';
          }

          // Stampa gli indici ed i valori degli elementi di un array
          function stampa_ind_val ($a) {
            foreach($a as $ind=>$val) {
              echo "$ind=>$val, ";
            }
            echo'<br>';
          }
        ?>
    </head>
    <body>
        <?php
          echo '<h1 style="text-align: center;">Esempio di uso di foreach()</h1>';

          $a1=array(10,20,-45,78,3);
          echo '<h3>Array (10,20,-45,78,3)</h3>';
          
          // Stampa i valori degli elementi
          stampa_val($a1);

          // Stampa gli indici ed i valori degli elementi
          stampa_ind_val($a1);

          $a2=array("Lun"=>17.5,"Mar"=>13.7,"Mer"=>18.9);
          echo '<h3>Array ("Lun"=>17.5,"Mar"=>13.7,"Mer"=>18.9)</h3>';
          
          // Stampa i valori degli elementi
          stampa_val($a2);

          // Stampa gli indici ed i valori degli elementi
          stampa_ind_val($a2);
        ?>
    </body>
</html>
