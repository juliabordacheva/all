
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

if (!empty($_FILES)) {
     /*echo '<pre>';*/
     if (array_key_exists('avatar', $_FILES)) {
      if ($_FILES['avatar']['error'] ===0) {
       if (move_uploaded_file($_FILES['avatar']['tmp_name'], 'a.jpg')) {
        echo '<img src="a.jpg"/>';
       }
      }
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






<form action="form.php" method="POST" enctype="multipart/form-data">
	<div>Имя</div>

  <div> <input  type="text" name="name"></div>

  <div>Фамилия</div>

   <div><input type="text" name="surname"></div>

    <div>Возраст</div>

<div><input type="text" name="age"></div>

    <div>Аватар</div>
    <div><input type="file" name="avatar"></div>

    <input type="submit">

</form>

 </body>
  </html>