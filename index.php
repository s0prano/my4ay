<?php

$file = "text.txt";

$date = json_decode($_POST);

$fp = fopen($file, "a"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
fwrite($fp, $date . "\n");
fclose($fp);