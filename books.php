<?php

$filecontent = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=');
$result = json_decode($filecontent, true);
print_r($result);

?>