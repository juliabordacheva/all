<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Шаблон</title>
    </head>
    <body>
      <h1>Животные</h1>

      
      
    </body>
  </html> 

  <?php 
$animals = ['Europe' => ['Cervus elaphus', 'Erinaceus europaeus'], 
	             'Asia' => ['Ailuropoda melanoleuca', 'Pholidota'],
	             'Africa' => ['Giraffa camelopardalis',  'Troglodytes gorilla'],
	             'Australia' => ['Macropus rufus',  'Vombatidae'],
	             'India' => ['Elephas maximus'], 
	             'Antarctida' => ['Aptenodytes forsteri', 'Leptonychotes weddellii'],
	             'North America' => ['Vulpes lagopus', 'Ovibos'],
	             'Southern America' => ['Cacajao calvus', 'Vicugna pacos', 'Lagidium']];


$countinent = ['Europe','Asia','Africa','Australia','India','Antarctida','North America','Southern America'];
 
$animals2 = []; 
foreach($animals as $areaName => $animalArray) {
    foreach ($animalArray as $animalName) {
        if (strpos($animalName, ' ') !== false) {
        }
    }
}
print_r($animals2);
list($a,$b) = array_slice($animals2, 0, 1);
shuffle($a); 
 shuffle($b);
 $a1 = implode (",", $a);
 $b1 = implode (",", $b);
 
?>