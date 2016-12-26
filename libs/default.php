<?php

function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
}

function q($query){ //mysqli_query
	global $link;	
	$res = mysqli_query($link,$query);
	if($res === false){
		$info = debug_backtrace();
		echo $info;
		foreach($info as $v){
			if(is_array($v)){
				$file = $v['file'];
				$line = $v['line'];
			}	
		
		}	
	$error = date('d/m/y, h:m:s')."\n In FILE: ".$file."\n Line #: ".$line."\n QUERY: ". $query."\n".mysqli_error($link);
		file_put_contents('./logs/mysql.log',strip_tags($error)."\n\n",FILE_APPEND);	
		
	}
	else{
		return $res;	
	}
}