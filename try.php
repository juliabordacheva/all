
<?php 
$animals = array(
    "Africa" => array('Elephants','Gorilla'),
    "Australia" => array('Kangaroo','Koala bear'),
    "South America" => array('Panthera onca','Anaconda'),
    "North America" => array('Haliaeetus leucocephalus','Gray Wolf'),
    "Asia" => array('Ailuropoda melanoleuca','Bengal Tiger'),
    "Europe" => array('Bos primigenius','Wolverine'),
    "Antarctica" => array('Aptenodytes forsteri','Aptenodytes patagonica'),
);
function mySearch($arr){
    foreach($arr as $key => $val){
        foreach($val as $v){
            if(preg_match("/\s+/", $v)){
               echo $key." ".$v."\n";
            }
        }
    }
}
mySearch($animals);
$result = [];
foreach ($animals as $countinent) {
    $result = array_merge($result, array_filter('область 1', function ($item){ return count(explode(' ', $item)) === 2; }) );
}
print_r($result);
 ?>


 $fant = implode("|", array_slice($fantastic1, 2, 5)); 
var_dump($fant);