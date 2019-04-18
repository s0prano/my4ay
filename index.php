<?php

$req_dump = print_r(getallheaders(), TRUE);
$post = print_r($_POST, TRUE);
$json_str = json_decode(file_get_contents('php://input'), true);
$jp = fopen('json.log', 'a');
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fwrite($jp, $json_str);
fclose($fp);
fclose($jp);

$arr = [
    'error' => "0"
];

$myJSON = json_encode($arr);

echo $myJSON;