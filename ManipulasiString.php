<?php

$name = "Jon";

echo "Name : " . $name . PHP_EOL; 
echo "Value : " . 100 . PHP_EOL;

$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "100.1";
var_dump($valueFloat);

$name = "Jon";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

$var = "var";
echo "This is {var}s" . PHP_EOL;
