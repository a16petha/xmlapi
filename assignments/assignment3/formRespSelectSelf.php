<html>

<head>
    <style>
        /* CSS börjar här */
        table {
            border-collapse: collapse;
            text-align: left;
        }

        th {
            text-align: center;
            padding: 5px;
            background-color: black;
            color: white;
        }

        td {
            padding-right: 20px;
            padding: 5px;
        }

        div {
            padding: 10px 0px;
        }
    </style>
</head>

<body>
    <table border='1'>
        <?php


        // Hämtar landet från formuläret samt sätter default till inget så ingen info syns om personen ej valt något
        if (isset($_POST['country'])) {
            $incountry = $_POST['country'];
        } else {
            $incountry = "";
        }

        // Hämtar det valda landet som sparats i $incountry och sparar det i en ny array
        $url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/vehicles/?country=" . $incountry;
        $jsontext = file_get_contents($url);
        $arr = json_decode($jsontext);

        // Visar en div med valt land ovanför tabellen
        echo "<div>$incountry</div>";
        echo '<tr><th>Country</th><th>Model</th><th>Configuration</th><th>Horsepower</th></tr>';
        // Hämtar värdena i arrayen och loopar ut informationen som land samt uppgifter om fordonen.
        foreach ($arr as $man) {
            foreach ($man as $model) {
                echo "<tr>";
                echo "<td>" . $incountry . "</td>";
                echo "<td>" . $model[0] . "</td>";
                echo "<td>" . $model[1] . "</td>";
                echo "<td>" . $model[2] . "</td>";
                echo "</tr>";
            }
        }

        ?>
    </table>
</body>

</html>