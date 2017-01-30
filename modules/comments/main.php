<?php
//Comments controller
if(isset($_POST['login'],$_POST['email'],$_POST['comment'],$_POST['submit'])){
	$errors = array();
	if(empty($_POST['login'])){
		$errors['login'] = 'Вы не ввели логин';
	}
	if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$errors['email'] = 'Вы не ввели email';
	}
	if(empty($_POST['comment'])){
		$errors['comment'] = 'Вы не ввели комментарий';	
	}
	if(!count($errors)){
		mysqli_query($link,
			"INSERT INTO `comments` SET
			`login`   = '".mres($_POST['login'])."',
			`email`	  = '".mres($_POST['email'])."',
			`comment` = '".mres($_POST['comment'])."',
			`date`    = NOW()
		");
		header("Location: /index.php?module=comments");
		exit();
	}
}
$res = q("SELECT * FROM `comments` ORDER BY `id` DESC") ;
