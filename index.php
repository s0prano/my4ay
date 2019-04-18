<?php

$req_dump = print_r(getallheaders(), TRUE);
$post = print_r($_POST, TRUE);
$pf = fopen('post.log', 'a');
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fwrite($pf, $post);
fclose($fp);

$arr = [
    'error' => "0"
];

$myJSON = json_encode($arr);

echo $myJSON;