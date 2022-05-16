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
                include('include/connect.php');
                $conn=mysqli_connect($HOST, $USER, $PASSWORD, $DB);
                $ris=mysqli_query($conn, 'select * from libri');
                while ($row=mysqli_fetch_assoc($ris)) {
                    $co=$row['codice'];
                    $ti=$row['titolo'];
                    $au=$row['autore'];
                    $pr=$row['prezzo'];
                    $dv=$row['data_vendita'];
                    echo "<tr><td>$co</td><td>$ti</td><td>$au</td><td>$pr</td><td>$dv</td></tr>";
                }
                mysqli_free_result($ris);
                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>
