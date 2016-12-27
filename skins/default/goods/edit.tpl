<div class="goods_form">
<form method="post" action="">
<h1>Редактирование товара</h1>
  <div>Наименование товара:</div>
   <div><input type="text" name="title" value="<?php echo htmlspecialchars($row['title']);?>"></div>
   <div>Код товара:</div>
   <div><input type="text" name="icode" value="<?php echo htmlspecialchars($row['icode']);?>"></div>
   <div>Категория товара:</div>
 <select class="cat"  name="cat">  
   <?php
	$category = array('Планшеты','Ноутбуки');
		foreach($category as $v) {
			if($row['cat'] == $v){
				echo '<option selected="selected">'.$v.'</option>';
			}		
			else{
				echo '<option>'.$v.'</option>';
			}
		}	
?>
</select>
   <div>Цена товара:</div>
   <div><input type="text" name="price" value="<?php echo htmlspecialchars($row['price']);?>"></div>
  <div>Краткое описание товара:</div>
   <div> <textarea name="description"><?php echo htmlspecialchars($row['description']);?></textarea></div>
  <div>Полное описание:</div>
   <div><textarea name="text"><?php echo htmlspecialchars($row['text']);?></textarea></div><br>
  <div><input type="submit" name="edit" value="Изменить"></div>
</form>
</div>