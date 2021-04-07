<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Array som innehåller all information om bilarna
    $trucks = array(
        array(
            "KrAZ", "Kremenchuk", "Ukraine",
            array(
                array("KrAZ-65055", "6x6", "330Hp"),
                array("KrAZ-6130C4", "6x6", "330Hp"),
                array("KrAZ-5133H2", "4x2", "330Hp"),
                array("KrAZ-7140H6", "8x6", "400Hp")
            )
        ),
        array(
            "EBIAM", "Thessaloniki", "Greece",
            array(
                array("EBIAM MVM", "4x4", "86Hp")
            )
        ),
        array(
            "KaMAZ", "Naberezhnye Chelny", "Tatarstan",
            array(
                array("KAMAZ 54115", "6x4", "240Hp"),
                array("KAMAZ 6560", "8x8", "400Hp"),
                array("KAMAZ 5460", "8x8", "340Hp")
            )
        ),
        array("LIAZ", "Rynovice", "Czechoslovakia", array(
            array("LIAZ 706 RT", "2x4", "160Hp")
        )),
        array(
            "IRUM", "Brasov", "Romania",
            array(
                array("TAF 690", "2x4", "90Hp")
            )
        ),
        array(
            "MAZ", "Minsk", "Belarus",
            array(
                array("MAZ 535", "8x8", "375Hp"),
                array("MAZ 7310", "8x8", "525Hp"),
                array("MAZ 7907", "4x12", "1250Hp"),
                array("MAZ 6317", "6x6", "425Hp"),
                array("MAZ 6430", "6x6", "360Hp"),
                array("MAZ 5551", "4x2", "160Hp")
            )
        ),
        array(
            "BelAz", "Zohodino", "Belarus",
            array(
                array("Belaz 75600", "4x4", "3400Hp")
            )
        ),
        array(
            "Oshkosh", "Oshkosh", "USA",
            array(
                array("Oshkosh P-15", "8x8", "840Hp"),
                array("Oshkosh MK-36", "6x6", "425Hp")
            )
        ),
        array(
            "Tatra", "Koprivnice", "Czechoslovakia",
            array(
                array("Tatra T 813", "4x4", "266Hp"),
                array("Tatra T 815", "10x10", "436Hp"),
            )
        )
    );

    // Formulär som hämtar alla länder från arrayen och skickar vidare det valda alternativet
    echo "<form method='post' action='formRespSelectSelf.php'>";
    echo "<select name='selectbox'>";
    // Loopar ut informationen i arrayen till en drop-down meny med landsval
    foreach ($trucks as $truck) {
        echo '<option>' . $truck[2] . '</option>';
    }
    echo "<input type='submit' value='Skicka'>";
    echo "</select>";
    echo "</form>";
    ?>
</body>

</html>