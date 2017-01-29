<?php
if(isset($_GET['hash'],$_GET['id'])){
	q("
	UPDATE `users` SET
	`activate` = 1 
	WHERE `hash` = '".mres($_GET['hash'])."'
	");
	$info = 'Вы успешно активировались';
}
else{
	echo 'перешли по неправильной ссылке';
}