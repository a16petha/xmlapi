<html>

<body>
    <pre>
<?php

$url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/vehicles/";
$jsontext = file_get_contents($url);
$arr = json_decode($jsontext);

print_r($arr);

?>    
</pre>
</body>

</html>