

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

foreach ($animals as $k => $v) {
	$a[$k] = preg_grep("~\s{1}~", $v);
	}

	print_r($a);





$result = [];
foreach ($animals as $countinent) {
    $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}
print_r($result);
?>