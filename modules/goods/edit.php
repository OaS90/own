<?php
if(isset($_POST['edit'],$_POST['title'],$_POST['description'],$_POST['cat'],$_POST['text'],$_POST['icode'],$_POST['price'])){
	foreach($_POST as $k=>$v){
		$_POST[$k] = trim($v);
	}
	mysqli_query($link,"
	UPDATE `goods` SET
	`title` 	  = '".mysqli_real_escape_string($link,$_POST['title'])."',
	`description` = '".mysqli_real_escape_string($link,$_POST['description'])."',
	`cat`  		  = '".mysqli_real_escape_string($link,$_POST['cat'])."',
	`text`		  = '".mysqli_real_escape_string($link,$_POST['text'])."',
	`icode`		  = '".mysqli_real_escape_string($link,$_POST['icode'])."',
	`price`		  = '".mysqli_real_escape_string($link,$_POST['price'])."'
	WHERE `id` = '".(int)$_GET['id']."'
	") or die(mysqli_error($link));

	$_SESSION['info'] = 'Запись была изменена';
	header("Location:index.php?module=goods");
	exit();
}
$goods = mysqli_query($link,"
		SELECT * FROM
		`goods` WHERE
		`id` = '".(int)$_GET['id']."'
		LIMIT 1
") or die(mysqli_error($link));
if(!mysqli_num_rows($goods)){
	$_SESSION['info'] = 'Данной новости не существует';
	header("Location:index.php?module=goods");
	exit();
}

if(isset($_POST['title'])){
	$row['title'] = $_POST['title'];
}
$row = mysqli_fetch_assoc($goods);