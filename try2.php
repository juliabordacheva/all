
<?php 



$animals = array(
'Europe' => array ('cervus elaphus', 'erinaceus europaeus'),
'Asia2' => array ('ailuropoda melanoleuca', 'pholidota'),
'Africa' => array ('giraffa camelopardalis',  'troglodytes gorilla'),
'Australia' => array  ('macropus rufus',  'vombatidae'),
'India' => array ('elephas maximus'), 
'Antarctida' => array('aptenodytes forsteri', 'leptonychotes weddellii'),
'North America' => array ('vulpes lagopus', 'ovibos'), 
'Southern America' => array('cacajao calvus', 'vicugna pacos', 'Lagidium')

);
//
 
/*$arrayFinal = array();*/
foreach($animals as $areaName => $animalArray) {
    foreach ($animalArray as $animalName) {
    	$animalName = explode(" ", $animalName);
    }
}
        
  foreach ($animalName as $key => $value) {
 	$value =  count($animalName);
 		echo $value;
 	}

 	if ($value == 2) {
 		echo $value;
 	}
 
 /* for ($animalName = 0; $animalName == 2; ) {
  	     $key = count($key);
  }
  if ($key = 2) {
  	print_r($key);
  } else {
    exit();

  }*/
        /*if (strpos($animalName, ' ') !== false) { 
            array_push($arrayFinal, $animalName);
        }*/
    

/*print_r($arrayFinal);
echo "<pre>";*/


 /*$a = implode(" ", $arrayFinal);*//*Объединили массив с названиями из двух животных в одну строку*/
/*print_r($a) . '<br>';*/
 /*$b = explode(" ", $a);*/ /*разбили эту строку по словам*/
/*print_r($b);*/
/*for ($i = 0; $i<24; $i+2) {
   echo $i;*/
	/*$value1 = array_slice($b, 0, 2);
	$value2 = array_slice($b, 2, 2);
	$value3 = array_slice($b, 4, 2);
	$value4 = array_slice($b, 6, 2);
	$value5 = array_slice($b, 8, 2);
	$value6 = array_slice($b, 10, 2);
	$value7 = array_slice($b, 12, 2);
	$value8 = array_slice($b, 14, 2);
	$value9 = array_slice($b, 16, 2);
	$value10 = array_slice($b, 18, 2);
	$value11 = array_slice($b, 20, 2);
	$value12 = array_slice($b, 22, 2);
*/
/*}*/
/*print_r($value1);
print_r($value2);
print_r($value3);
print_r($value4);
print_r($value5);
print_r($value6);
print_r($value7);
print_r($value8);
print_r($value9);
print_r($value10);
print_r($value11);
print_r($value12);*/

/*list($first1, $second1) = array_chunk($value1, 1);
list($first2, $second2) = array_chunk($value2, 1);
list($first3, $second3) = array_chunk($value3, 1);
list($first4, $second4) = array_chunk($value4, 1);
list($first5, $second5) = array_chunk($value5, 1);
list($first6, $second6) = array_chunk($value6, 1);
list($first7, $second7) = array_chunk($value7, 1);
list($first8, $second8) = array_chunk($value8, 1);
list($first9, $second9) = array_chunk($value9, 1);
list($first10, $second10) = array_chunk($value10, 1);
list($first11, $second11) = array_chunk($value11, 1);
list($first12, $second12) = array_chunk($value12, 1);*/

/*$first_all = array_merge($first1, $first2, $first3, $first5, $first5, $first6, $first7, $first8, $first9, $first10, $first11, $first12);
$second_all = array_merge($second1, $second2, $second3, $second4, $second5, $second6, $second7, $second8, $second9, $second10, $second11, $second12);
shuffle($first_all);
shuffle($second_all);

list($f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12) = array_chunk($first_all, 1);
list($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10, $s11, $s12) = array_chunk($second_all, 1);*/

/*$n1 = merge($f1, $s1);
$n2 = merge($f2, $s2);
$n3 = merge($f3, $s3);
$n4 = merge($f4, $s4);
$n5 = merge($f5, $s5);
$n6 = merge($f6, $s6);
$n7 = merge($f7, $s7);
$n8 = merge($f8, $s8);
$n9 = merge($f9, $s9);
$n10 = merge($f10, $s10);
$n11 = merge($f11, $s11);
$n12 = merge($f12, $s12);*/

/*print_r($n1);
print_r($n2);
print_r($n3);
print_r($n4);
print_r($n5);
print_r($n6);
print_r($n7);
print_r($n8);
print_r($n9);
print_r($n10);
print_r($n11);
print_r($n12)
/*list($fantastic1, $fantastic2) = array_chunk($b, ceil(count($b)/2));*/ /* разделили образовавшийся перемешанный массив на 2 штуки*/
/*print_r($fantastic1);*//*
print_r($fantastic2);
shuffle($fantastic1);
shuffle($fantastic2);*/
/*$fantastic1 = [implode(' ', $fantastic1)];/*разбили массивы на строку еще раз*/
/*$fantastic2 = [implode(' ', $fantastic2)];*//*
print_r($fantastic1);

print_r($fantastic2);*/



?>




<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Шаблон</title>
    </head>
    <body>
      <h1>Форма</h1>
         </body>
  </html> 