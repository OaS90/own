<div class="mod_comments">
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<div class="comment">';
	echo '<b>'.htmlspecialchars($row['login']).' </b>|<span>'.$row['date'].'</span><br>';
	echo  nl2br(htmlspecialchars($row['comment'])).'</div>';
}
?>
</div>
<div class="form_comment">
<h1>Напишите свой комментарий:</h1>
<form action="" method="post">
	<table>
	  <tr>
		<td>Логин*</td>
		<td><input type="text" name="login" value="<?php if(isset($_POST['login'])){echo htmlspecialchars($_POST['login']);}?>"></td>
		<td><?php if(isset($errors['login'])){echo htmlspecialchars($errors['login']);}?></td>
	  </tr>
	  <tr>
		<td>E-mail*</td>
		<td><input type="text" name="email" value="<?php if(isset ($_POST['email'])){ echo htmlspecialchars($_POST['email']);}?>"></td>
		<td><?php if(isset($errors['email'])){echo htmlspecialchars($errors['email']);}?></td>
	  </tr>  
	  <tr>
		<td>Комментарий*</td>
		<td><textarea name="comment"><?php if(isset($_POST['comment'])){echo htmlspecialchars($_POST['comment']);}?></textarea></td>
		<td><?php if(isset($errors['comment'])){echo htmlspecialchars($errors['comment']);}?></td>
	  </tr>
	</table>
	<input type="submit" name="submit" value="Отправить">
</form>
</div>
<div class="clear"></div>
<?php	
	echo $info;
	
