<?php
if(isset($_POST['edit'],$_POST['title'],$_POST['description'],$_POST['cat'],$_POST['text'],$_POST['icode'],$_POST['price'])){
	trimAll($_POST);
	$res = q("
	UPDATE `goods` SET
	`title` 	  = '".mres($link,$_POST['title'])."',
	`description` = '".mres($link,$_POST['description'])."',
	`cat`  		  = '".mres($link,$_POST['cat'])."',
	`text`		  = '".mres($link,$_POST['text'])."',
	`icode`		  = '".mres($link,$_POST['icode'])."',
	`price`		  = '".mres($link,$_POST['price'])."'
	WHERE `id` = '".(int)$_GET['id']."'
	");
	$_SESSION['info'] = '������ ���� ��������';
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
	$_SESSION['info'] = '������ ������� �� ����������';
	header("Location:index.php?module=goods");
	exit();
}
if(isset($_POST['title'])){
	$row['title'] = $_POST['title'];
}
$row = mysqli_fetch_assoc($goods);