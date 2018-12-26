 <?php

 $resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'money6.csv', 'w');

$csv_list = [];
while (($data = fgetcsv($resource, 0, ";")) !==FALSE) {
	$csv_list[] = $data;
}
$today = date('Y-m-d');
$total_pay = 0;

 foreach ($csv_list as $key) {
 	if ($key[0] === $today) {
 		$total_pay += $key[2];
 	}
 	
 }
 echo $total_pay;

  $argv = [];
foreach ($argv as $arg) {
	$e=explode(" ",$arg);
    if(count($e)==2)
        $_GET[$e[0]]=$e[1];
    else    
        $_GET[$e[0]]=0;
}
?>