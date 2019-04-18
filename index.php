<?php

$req_dump = print_r(getallheaders(), TRUE);
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);

$arr = [
    'error' => "0"
];

$myJSON = json_encode($arr);

echo $myJSON;