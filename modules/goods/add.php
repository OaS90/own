<?php
	if(isset($_POST['submit'],$_POST['title'],$_POST['description'],$_POST['cat'],$_POST['text'],$_POST['icode'],$_POST['price'])){
		q("
		INSERT INTO `goods` SET
		`title` 	  = '".mres($link,$_POST['title'])."',
		`description` = '".mres($link,$_POST['description'])."',
		`cat`  		  = '".mres($link,$_POST['cat'])."',
		`text`		  = '".mres($link,$_POST['text'])."',
		`icode`		  = '".mres($link,$_POST['icode'])."',
		`price`		  = '".mres($link,$_POST['price'])."'
		");	
		header("Location:index.php?module=goods");
		exit();
	}