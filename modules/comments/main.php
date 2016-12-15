<?php
//Comments controller
$errors = array();	
if(isset($_POST['login'],$_POST['email'],$_POST['comment'],$_POST['submit'])){
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
		`login`   = '".mysqli_real_escape_string($link,$_POST['login'])."',
		`email`	  = '".mysqli_real_escape_string($link,$_POST['email'])."',
		`comment` = '".mysqli_real_escape_string($link,$_POST['comment'])."',
		`date`    = NOW()
		")or die(mysqli_error($link));
		header("Location: /index.php?module=comments");
		exit();
	}
}
$res = mysqli_query($link,"
	SELECT * FROM `comments` 
	ORDER BY `id` DESC") 
	or die(mysqli_error($link));
