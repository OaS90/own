<div class="yt-container">
<?php

# если что-то получено...
if ($arr) {
    $output = '';
    # ...построить табличку с изображением, названием и ссылкой на ролик
    echo '<tr>';
    foreach ($arr as $v) { # цикл по массиву
        $LINK = $v['url'];
        $IMAGE = $v['imgs']['120x90'][0];
        $TITLE = $v['title'];
        echo '<div class="yt-item">';
        echo '<a href="http://www.youtube.com/watch?v='.$LINK.'" rel="nofollow" target="_blank" class="hover-image">';
        echo '<img src="'.$IMAGE.'" alt="" /></a>';
        echo '<h3><a href="http://www.youtube.com/watch?v='.$LINK.'" target="_blank">'.$TITLE.'</a></h3>';
        echo '</div>';
    }  
       
} else {
    # ...иначе, если массив данных пуст, вывести соответствующее сообщение
    echo 'Не удалось получить данные';
}
	 echo '<div class="clear"></div>';
?>
</div>