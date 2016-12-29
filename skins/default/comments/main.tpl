<div class="mod_comments">
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<div class="comment">';
	echo '<b>'.hsc($row['login']).' </b>|<span>'.$row['date'].'</span><br>';
	echo  nl2br(hsc($row['comment'])).'</div>';
}
?>
</div>
<div class="form_comment">
<h1>Напишите свой комментарий:</h1>
<form action="" method="post">
	<table>
	  <tr>
		<td>Логин*</td>
		<td><input type="text" name="login" value="<?php if(isset($_POST['login'])){echo hsc($_POST['login']);}?>"></td>
		<td><?php if(isset($errors['login'])){echo hsc($errors['login']);}?></td>
	  </tr>
	  <tr>
		<td>E-mail*</td>
		<td><input type="text" name="email" value="<?php if(isset ($_POST['email'])){ echo hsc($_POST['email']);}?>"></td>
		<td><?php if(isset($errors['email'])){echo hsc($errors['email']);}?></td>
	  </tr>  
	  <tr>
		<td>Комментарий*</td>
		<td><textarea name="comment"><?php if(isset($_POST['comment'])){echo hsc($_POST['comment']);}?></textarea></td>
		<td><?php if(isset($errors['comment'])){echo hsc($errors['comment']);}?></td>
	  </tr>
	</table>
	<input type="submit" name="submit" value="Отправить">
</form>
</div>
<div class="clear"></div>
