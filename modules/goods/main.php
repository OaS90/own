<?php
//Goods controller
$goods=mysqli_query($link,"
	SELECT * FROM `goods` 
	ORDER BY `id` DESC"
);
if(isset($_POST['delete'],$_POST['ids'])){
	foreach($_POST['ids'] as $k=>$v){
	mysqli_query($link,"
	DELETE FROM `goods`
	WHERE 
	`id` ='".(int)$v."'"
	);
	}
	header("Location:index.php?module=goods");
	exit();
}
if(isset($_GET['action']) && $_GET['action']='delete'){
	mysqli_query($link,"
	DELETE FROM `goods`
	WHERE 
	`id` ='".(int)$_GET['id']."'"
	);
	header("Location:index.php?module=goods");
	exit();
}
