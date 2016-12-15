<div class="add_goods_form">
<form method="post" action="">
  <div>Наименование товара:</div>
  <div><input type="text" name="title"></div>  
  <div>Код товара:</div>
  <div><input type="text" name="icode"></div>
  <div>Категория товара:</div>
  <select name="cat">  
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
  <div><input type="text" name="price"></div>
  <div>Краткое описание:</div>
  <div> <textarea name="description"></textarea></div>
  <div>Полное описание:</div>
  <div><textarea name="text"></textarea></div> 
  <div><input type="submit" name="submit" value="Добавить товар"></div>
</form>
</div>