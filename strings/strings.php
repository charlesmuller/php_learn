<?php

$string = "Testes de Integração com PHP";

echo mb_strlen($string) . PHP_EOL;

echo mb_strtolower(mb_strtoupper($string)) . PHP_EOL ;

echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;