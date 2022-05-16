<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form e PHP</title>
    </head>

    <body>
        <h1 style="text-align: center;">Stampa dati form con elementi a valore multiplo con programma PHP</h1>
        <p>Nome= <?= $_POST["nome"] ?></p>
        <p>Password= <?= $_POST["pass"] ?></p>
        <p>Titolo Pubblicazione= <?= $_POST["titolo"] ?></p>
        <p>Autore Pubblicazione= <?= $_POST["autore"] ?></p>
        <p>Nome del file= <?= $_POST["testo"] ?></p>
        <p>Mezzo di inoltro del testo= <?php 
          foreach($_POST["mezzo"] as $val)
            {echo "$val ";};
        ?></p>
        <p>Giudizio= <?= $_POST["giudizio"] ?></p>
        <p>Commento= <?= $_POST["Commento"] ?></p>
        <p>Da pubblicare?= <?= $_POST["pub"] ?></p>
        <p>Dove= <?php
          for($i=0;$i<sizeof($_POST["pub_dove"]);$i++)
           {echo $_POST["pub_dove"][$i];
            echo ' ';
           }
        ?></p>
    </body>
</html>

