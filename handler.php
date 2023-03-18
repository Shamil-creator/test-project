<<?php 

$title = $_REQUEST['title'];
$text = $_REQUEST['text'];

$conn = new PDO('mysql:host=localhost;dbname=pampam','root', '');


$sql = "INSERT INTO posts(title, text) VALUES('".$title . "','".$text ."')";

$isAdded = $conn->exec($sql);


if($isAdded){
	echo "Данные в таблицу добавлены <br>";
	echo "<a href='/'>Вернуться к форме</a>";
}else{
	var_dump($conn->errorInfo());
}


?>