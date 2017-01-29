<?php
if(isset($_POST['edit'],$_POST['title'],$_POST['description'],$_POST['cat'],$_POST['text'],$_POST['icode'],$_POST['price'])){
	trimAll($_POST);
	$res = q("
	UPDATE `goods` SET
	`title` 	  = '".mres($_POST['title'])."',
	`description` = '".mres($_POST['description'])."',
	`cat`  		  = '".mres($_POST['cat'])."',
	`text`		  = '".mres($_POST['text'])."',
	`icode`		  = '".mres($_POST['icode'])."',
	`price`		  = '".mres($_POST['price'])."'
	WHERE `id` = '".(int)$_GET['id']."'
	");
	$_SESSION['info'] = 'Запись была изменена';
	header("Location:index.php?module=goods");
	exit();
}
$goods = q("
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