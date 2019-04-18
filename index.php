<?php

$req_dump = print_r(getallheaders(), TRUE);
$post = print_r($_POST, TRUE);
$json_str = file_get_contents('php://input');
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