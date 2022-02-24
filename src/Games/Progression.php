<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('What number is missing in the progression?');
    $arrayRand = [];
    $array = [];
    $result = [];
    for ($i = 0; $i <= 2; $i++) {
        $randNum = rand(100, 200);
          for ($i = 0; $i <= $randNum; $i++) {
            $randDivision = rand(6 , 8);
              if ($i % $randDivision === 0) {
              $result[] = $i;
              }
          }
          $str = implode(' ', $result);
           $count = count($result) - 1;
          $rand = rand(0, $count);
          $randStr = $result[$rand];
          $array[] = [str_replace($randStr, '...', $str)];
          $arrayRand[] = [$randStr];
     
      }
    $logic = logic($array, $question, $arrayRand);
    return $logic;
}
