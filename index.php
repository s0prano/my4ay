<?php

$req_dump = print_r(getallheaders(), TRUE);
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);