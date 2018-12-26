
<?php 
if (!empty($_POST)) {
	if (array_key_exists('age', $_POST)) {
     $options = [
      'options' => [
         'min_range' => 18,
         'max_range' => 150
          ]
      ];

	
}
$validate = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options);

/*$age = (int)$_POST['age'];
var_dunp($age);  */

if ($age > 0) {

echo 'Возраст: ' .$age;
} else {
	echo 'Возраст не указан или указан не корректно';
}
}

 ?>





<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Таблица</title>
    </head>
    <body>
      <h1>Формы</h1>






<form action="form.php" method="POST">
	<div>Имя</div>

  <div> <input  type="text" name="name"></div>

  <div>Фамилия</div>

   <div><input type="text" name="surname"></div>

    <div>Возраст</div>

<div><input type="text" name="age"></div>
    <input type="submit">

</form>

 </body>
  </html>