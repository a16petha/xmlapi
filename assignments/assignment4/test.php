<html>

<body>
    <pre>
<?php

function startElement($parser, $entityname, $attributes)
{
    echo "S:" . $entityname . "<br>";
}

function endElement($parser, $entityname)
{
    echo "E:" . $entityname . "<br>";
}

function charData($parser, $chardata)
{
    $chardata = trim($chardata);
    if ($chardata == "") return;
    echo "D:" . $chardata . "<br>";
}

$parser = xml_parser_create();
xml_set_element_handler($parser, "startElement", "endElement");
xml_set_character_data_handler($parser, "charData");

$file = 'example1.xml';
$data = file_get_contents($file);

if (!xml_parse($parser, $data, true)) {
    printf("<P> Error %s at line %d</P>", xml_error_string(xml_get_error_code($parser)), xml_get_current_line_number($parser));
} else {
    print "<br>Parsing Complete!</br>";
}

xml_parser_free($parser);
?>
    </pre>
</body>

</html>