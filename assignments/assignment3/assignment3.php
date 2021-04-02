<html>

<head>
    <style>
        /* CSS börjar här */
        button {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <?php

    // Hämtar arrayen med informationen om tillverkare samt land via webservice
    $url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/manufacturer/";
    $jsontext = file_get_contents($url);
    $arr = json_decode($jsontext);

    // Formulär som visar en lista med tillverkare
    echo "<form method='post' action='formRespSelectSelf.php'>";
    echo "<select name='country'>";
    // Visar upp värdet för tillverkare men skickar vidare landet för tillverkaren
    foreach ($arr as $country) {
        echo "<option value='" . $country[1] . "' >" . $country[0] . "</option>";
    }
    echo "</select>";
    echo "<button>Skicka</button>";
    echo "</form>";

    ?>

</body>

</html>