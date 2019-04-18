<?php

$file = "text.txt";

$date = date('H:i:s');

$fp = fopen($file, "a"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
fwrite($fp, "  |  " . $date);
fclose($fp);