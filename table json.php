


<?php

$data = file_get_contents(__DIR__ . '/table.json');

$contacts = json_decode($data, true);



?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Таблица</title>
    </head>
    <body>
      <h1>Таблица JSON</h1>

      <table>
         <tr>
            <td>Имя</td>
            <td>Фамилия</td> 
            <td>Адрес</td>
            <td>Телефон</td>
         </tr>

    <?php foreach ($contacts as $contact) { ?>
    	 <tr>
    		<td><?php echo $contact['firstName'] ?></td>
    		<td><?php echo $contact['lastName'] ?></td>
    		<td><?php echo $contact['address'] ?></td>
    		<td><?php echo $contact['phone'] ?></td>
    			
          </tr>
      <?php } ?>
    	</table>	



    	
    </body>
  </html>