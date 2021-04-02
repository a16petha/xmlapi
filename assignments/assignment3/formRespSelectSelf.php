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
            $country = $_POST['country'];
        } else {
            $country = "";
        }

        // Hämtar det valda landet som sparats i $country och sparar det i en ny array
        $url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/vehicles/?country=" . $country;
        $jsontext = file_get_contents($url);
        $arr = json_decode($jsontext);

        // Visar en div med valt land ovanför tabellen
        echo '<tr><th>Country</th><th>Model</th><th>Configuration</th><th>Horsepower</th></tr>';
        // Hämtar värdena i arrayen och loopar ut informationen som land samt uppgifter om fordonen.
        foreach ($arr as $manufacturer) {
            foreach ($manufacturer as $info) {
                echo "<tr>";
                echo "<td>" . $country . "</td>";
                echo "<td>" . $info[0] . "</td>";
                echo "<td>" . $info[1] . "</td>";
                echo "<td>" . $info[2] . "</td>";
                echo "</tr>";
            }
        }

        ?>

    </table>
</body>

</html>