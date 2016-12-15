<div style="text-align:center;">
<?php 
foreach(scandir($_GET['link']) as $f){
	if(is_dir($_GET['link'] . '/'. $f)){
		echo '<a href="index.php?page=program&link='.(isset($_GET['link']) ? $_GET['link']. '/' . $f: $f).'"><img src="image/fol.png">' . $f .'</a>' .'<br>';		
	}
	else{
		echo '<img src="image/file.png"> ' . $f . '<br>';
	}	
}
?>
</div>