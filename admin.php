<?php




$filecontent = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'admin.json');
$result = json_decode($filecontent, true);
print_r($result);


?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Таблица</title>
    </head>
    <body>
      <h1>Формы</h1>

<form action=""form.php"" method="POST">
  <fieldset>
    <legend>1. Какой возраст совершеннолетия в РФ?</legend>
      <label><input type="radio" name="q1"> 10</label>
      <label><input type="radio" name="q1"> 20</label>
      <label><input type="radio" name="q1"> 18</label>
      <label><input type="radio" name="q1"> 31</label>
  </fieldset>
  <fieldset>
    <legend>2. При какой температуре замерзает вода?</legend>
      <label><input type="radio" name="q2"> -10</label>
      <label><input type="radio" name="q2"> +20</label>
      <label><input type="radio" name="q2"> 0</label>
      <label><input type="radio" name="q2"> 30</label>
  </fieldset>
  <input type="submit" value="Отправить">  
</form>

</body>
  </html>