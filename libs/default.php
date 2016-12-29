<?php

function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
}
//при ошибке, записывает ее в лог
function q($query){ //mysqli_query
	global $link;	
	$res = mysqli_query($link,$query);
	if($res === false){
		$info = debug_backtrace();
		foreach($info as $v){
			if(is_array($v)){
				$file = $v['file'];
				$line = $v['line'];
			}	
		}	
	$error = date('d-m-y, h:m:s')."\n In FILE: ".$file."\n Line #: ".$line."\n QUERY: ". $query."\n".mysqli_error($link);
	file_put_contents('./logs/mysql.log',strip_tags($error)."\n\n",FILE_APPEND);	
	}
	else{
		return $res;
	}
}
global $link;
//убирает пробелы
function trimAll($el){
	if(!is_array($el)){
		$el = trim($el);
		}
	else {
		$el = array_map('trimAll',$el);
		}
	return $el;
}

//приводит все к числовому значению
function intAll($el){
	if(!is_array($el)){
		return (int)$el;
		}
	else {
		$el = array_map('intAll',$el);
		}
	return $el;
}

//приводит все к числу с плавающей точкой
function floatAll($el){
	if(!is_array($el)){
		return (float)$el;
		}
		else {
		$el = array_map('floatAll',$el);
		}
	return $el;
}
function hsc($el){
	if(!is_array($el)){
		return htmlspecialchars($el);
		}
	else {
		$el = array_map('hsc',$el);
		}
	return $el;
}
function mres($link,$el){
	if(!is_array($el)){
		return mysqli_real_escape_string($link,$el);
		}
	else {
		$el = array_map('mres',$el);
		}
	return $el;
}






