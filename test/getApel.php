<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="fonctions.js"></script>
        <script src="./JQuery/JQuery 3.5.1.js"></script>
        <style>
            table,
            td {
                border: 1px solid ;
            }

            thead,
            tfoot {
                background-color: #333;
                color: #fff;
            }
        </style>

    </head>
    <body>
        <?php
        include 'cnx.php';
//echo "hello" ;
        $sql = $cnx->prepare("SELECT id, communication, datetime, type FROM apel ");

        $sql->execute();
        echo"<table>";
        echo "<tr>";
        echo "<td style='background-color: yellow'> ID </td>";
        echo "<td style='background-color: yellow'> Transcription </td>";
        echo "<td style='background-color: yellow'> Date et Heure </td>";
        echo "<td style='background-color: yellow'> Type </td>";
        echo "<tr>";
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $lst) {
            //  var_dump($lst);


            echo "<tr>";
            echo "<td style='background-color: gainsboro' name='id' value ='" . $lst["id"] . "'>" . $lst['id'] . "</td>";
            echo "<td style='background-color: gainsboro' name='communication' value ='" . $lst["communication"] . "'>" . $lst['communication'] . "</td>";
            echo "<td style='background-color: gainsboro' name='datetime' value ='" . $lst["datetime"] . "'>" . $lst['datetime'] . "</td>";
            echo "<td style='background-color: gainsboro' name='type' value ='" . $lst["type"] . "'>" . $lst['type'] . "</td>";
            echo "</tr>";
        }
        echo"</table>";
        ?>
    </body>
</html>