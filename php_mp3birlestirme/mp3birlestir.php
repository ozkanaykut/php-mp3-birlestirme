<?php 

	$dosya1 = file_get_contents('skype_login.mp3'); // birinci dosyanın adı
	$dosya2 = file_get_contents('skype_logout.mp3'); // ikinci dosyanın adı

	file_put_contents('birlesmisdosya.mp3', $dosya1 . $dosya2);
?>