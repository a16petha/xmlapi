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

        $url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/manufacturer/";
        $jsontext = file_get_contents($url);
        $trucks = json_decode($jsontext);

        print_r($trucks);

        // Formulär som postar resultatet på samma sida i en tabell
        echo "<form method='post' action='uppgift3.php'>";
        echo "<select name='truck'>";
        // Loopar ut informationen i arrayen till en drop-down meny med landsval
        foreach ($trucks as $truck) {
            echo '<option>' . $truck[0] . '</option>';
        }
        echo "<input type='submit' value='Skicka'>";
        echo "</select>";
        echo "</form>";

        // Hämtar landet samt sätter default till inget så ingen info syns om personen ej valt något
        if (isset($_POST['truck'])) {
            $incountry = $_POST['truck'];
        } else {
            $incountry = "";
        }

        // Visar en div med valt land ovanför tabellen
        echo "<div>$incountry</div>";

        // Start av alla rader och kolumner samt headers
        echo "<tr><th>TILLVERKARE</th><th>STAD</th><th>LAND</th><th colspan='6'>INFORMATION</th></tr>";
        // Loop som kollar igenom valet i drop-down och listar resultaten för det valet
        foreach ($trucks as $truck) {
            if ($truck[0] == $incountry) {
                echo "<tr>";
                echo "<td>" . $truck[0] . "</td>";
                echo "<td>" . $truck[1] . "</td>";
                echo "<td>" . $truck[2] . "</td>";
                foreach ($truck[3] as $info) {
                    echo "<td>";
                    echo "<table>";
                    echo "<tr><td>" . $info[0] . "</td></tr>";
                    echo "<tr><td>" . $info[1] . "</td></tr>";
                    echo "<tr><td>" . $info[2] . "</td></tr>";
                    echo "</table>";
                    echo "</td>";
                }
                echo "</tr>";
            }
        }

        ?>
    </table>
</body>

</html>