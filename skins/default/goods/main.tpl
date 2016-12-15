<a href="index.php?module=goods&page=add" class="add_goods">Добавить товар</a>
<div class="goods_block">
  <form method="post" action="">
<?php 
	while($row=mysqli_fetch_assoc($goods)){
?>
	<div class="goods">
	  <input type="checkbox" name="ids[]" value="<?php echo $row['id'];?>" class="chk_goods">
	  <div class="good_img">
<?php echo '<img src="/image/'.$row['icode'].'.jpg">';?>
      </div> 
      <div class="goods_info">
        <div class="title_goods">
<?php 
	echo '<p>'.$row['title'].'</p>';
	echo 'Код товара: '.$row['icode'];
?>
        </div>	
        <div class="text_goods"><?php echo nl2br(htmlspecialchars($row['text']));?></div>	
      </div> 
	  <div class="price"><?php echo 'Цена товара: '.$row['price']. ' руб.';?></div>
      <div class="goods_ch">
		<a href="index.php?module=goods&action=delete&id=<?php echo $row['id']?>">Удалить</a> |
		<a href="index.php?module=goods&page=edit&id=<?php echo $row['id']?>">Изменить</a>
      </div> 
    </div>
<?php } ?>	
	<div class="del_button">
     <input type="submit" name="delete" value="Удалить выбранные товары">
	</div>
  </form>
</div>

