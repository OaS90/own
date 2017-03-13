<?php 
	class Mail{
		static $sub = 'по умолчанию';
		static $to = 'oas90@bk.ru';
		static $from = 'admin@xboctuk.school-php.com';
		static $text = 'Шаблонный текст';
		static $headers = '';
		
		static function send(){
			self::$sub = '=?utf-8?b?' . base64_encode(self::$sub) . '?=';
			self::$headers = "Content-type text/html; charset=\utf-8\"\r\n";
			self::$headers .= "From: " . self::$from."\r\n";
			self::$headers .= "MINE-Version :  1.0 \r\n";
			self::$headers .= "Date: ". date('D, d M Y h:i:s O'). "\r\n";
			self::$headers .= "Precedence: bulk\r\n";
			return mail(self::$to,self::$sub,self::$text,self::$headers);
		}
		
		static function TestSend(){
			if(mail(self::$to,'лала','dfvfdbd')){
				echo 'send';
			}
			else{
				echo 'did\'t send';
			}
			exit();
		}
	}	
