
<?php
/*var_dump($_POST['name']);*/ /*var_dum вывыодит значение переменной как она есть*/
/*$price = $_POST['price']*(1+0.01);*/ /*Cделали формулу для начисления процентов*/
/*Если мы вводим в форму 10 000 с пробелом, то он нам будет вычислять неправильный процент. Нам надо убрать пробел*/
/*str_replace(' ','', $_POST['price']);*//*СТР реплейс в аругментах меняет что то на что то, и указать в какой функции*/
/*var_dump($price);*/

/*$a = "38" . 'попугаев'; Конкатенация = склеивание строк с помощью точки
var_dump($a);*/
/*echo mb_strtoupper($_POST['name'], 'UTF-8');*/ /*Эта функция переводит нижний регистр в верхний
*/

/*$eggs = array("egg1", "egg2", "egg3");/*старый способ создания массива*/

/*$eggs = array(1 => "egg1", 2 => "egg2", 3 => "egg3", 4 => "egg4"); /*указываем ключи для массива*/
/**//*var_dump($eggs);*/

/*$data = [10, 11, 12 ,13];*//*Новый способ записать массив*/
/*var_dump($data);*/
/*$data = [100 => 2, 200 => 3];*//*ключи*/

/*$arr = ['a', 'b', 'c', 'd', 'e'];*/ /*если добавить 1 ключ, то он автоматически проставит все ключи подрял*/
   /*for ($i=0; $i<count($arr);$i ++) {*/ /*вывести все значения с нуля, посчитать размер массива, увеличивать на одно значение*/

    /*echo $arr[$i] ."<br>";
*/
/*}*/
/*foreach ($arr as $value) {
	echo $value;*/
	# code...
/*}*/

/*$arr = [ 
['name' => 'Юля', 'age' => 33, 'gender' => 'female'],
['name' => 'Маша', 'age' => 44, 'gender' => 'female'],
['name' => 'Вася', 'age' => 56, 'gender' => 'male'],
['name' => 'Джемал', 'age' => 18],*/
/*];*/

/*foreach ($arr as $key => $value) {  */
/*	echo $key . ' : ' .$value . "<br>";*//*выводим значения массива через фораж*/
/*}*/
/*$a = 'Alex'; 'Julia'; 'Melony'; 'Andrey';
$array = explode(';', $a);
print_r($a);*/

/*$a = ['Alex','Julia', 'Melony', 'Andrey'];*/
/*echo implode(', ', $a);*/ /*вывести массив в виде строки*/

/*$a = ['Alex','Julia'];
$b = ['Melony', 'Andrey'];
echo implode(' : ', array_merge($a, $b));*//*слияние массивов */

$a = [
['name' => 'Alex', 'age' => 10],
['name' => 'VIT', 'age' => 20],

];
$t = array_keys($a[0]);
var_dump($t);
?>


<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Шаблон</title>
    </head>
    <body>
      <h1>Форма</h1>

      <form action="STROKI_1.php" method="post"> <!-- /* если мы отправляем что то переменной POSTБ то все данные содержатся в этой переменной в виде массива -->
      	Имя
      	<input type="text" name="name">
      	<input type="submit" name="отправитель">

      </form>
      <!-- <ol>
      	<?php /*foreach*/ ($array /*as*/ /*$name*/); ?>
      	<li><?= $name  ?></li>
      <?php /*endforeach*/; ?>
      </ol> -->
    </body>
  </html> 