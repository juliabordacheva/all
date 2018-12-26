
<?php 
if (isset($_GET['radio'])) {
	echo 'Возраст совершеннолетия' . (($GET['name']));
}

if (isset($_GET['radio'])) {
	echo 'При какой температуре замерзает вода?' . (($GET['name']));
}

if (!empty($_POST)) {
	if (array_key_exists('radio', $_POST)) {
    echo 'true';
} else {
	echo 'false';
}

	
}


if (!empty($_POST)) {
	if (array_key_exists('name', $_POST)) {
    echo 'true';
} else {
	echo 'false';
}

	
}
 ?>