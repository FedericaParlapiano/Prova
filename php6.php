<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Passaggio parametri in PHP</title>
    </head>

    <body>
        <?php
          echo '<h1 style="text-align: center;">Parametri Passati al programma PHP</h1>';
          foreach($_GET as $ind=>$val) {
              echo "<p>$ind => $val</p>";
              }
        ?>
    </body>
</html>

