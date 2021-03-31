<html>

<head>
  <style>
    /* CSS starts here */
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
  </style>
</head>

<body>
  <!-- Start av tabellen -->
  <table border='1'>
    <?php
    //deklarerar variabeln $belarus
    $belarus = "Belarus";

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
    // Start av alla rader och kolumner samt headers
    echo "<tr><th>TILLVERKARE</th><th>STAD</th><th>LAND</th><th>INFORMATION</th></tr>";
    // Här startar for-loopen som kör igenom märke, stad och land
    foreach ($trucks as $truck) {
      // If-sats som avgör bakgrundsfärgen ifall bilmärket är från Belarus eller ej
      if ($truck[2] == $belarus) {
        echo "<tr style='background:yellow;'>";
      } else {
        echo "<tr style='background:lightblue;'>";
      }
      echo "<td>" . $truck[0] . "</td>";
      echo "<td>" . $truck[1] . "</td>";
      echo "<td>" . $truck[2] . "</td>";
      echo "<td>";
      echo "<table>";
      echo "<tr><th>MODELL</th><th>KONFIGURATION</th><th>HÄSTKRAFTER</th></tr>";
      // Loopar igenom informationen för varje bilmodell
      foreach ($truck[3] as $info) {
        echo "<tr>";
        echo "<td>" . $info[0] . "</td>";
        echo "<td>" . $info[1] . "</td>";
        echo "<td>" . $info[2] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>