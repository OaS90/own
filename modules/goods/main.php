<?php
//Goods controller
$goods=q("
	SELECT * FROM `goods` 
	ORDER BY `id` DESC"
);
if(isset($_POST['delete'],$_POST['ids'])){
	foreach($_POST['ids'] as $k=>$v){
	q("
	DELETE FROM `goods`
	WHERE 
	`id` ='".(int)$v."'"
	);
	}
	header("Location:index.php?module=goods");
	exit();
}
if(isset($_GET['action']) && $_GET['action']='delete'){
	q("
	DELETE FROM `goods`
	WHERE 
	`id` ='".(int)$_GET['id']."'"
	);
	header("Location:index.php?module=goods");
	exit();
}
