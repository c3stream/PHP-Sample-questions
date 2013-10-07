<?php 
	$message = "abcde";
	echo reverse_message($message);
	
	function reverse_message($message){
		$hairetsu = str_split($message);
		$reverse_message = "";
		foreach($hairetsu as $row){
			$reverse_message .= array_pop($hairetsu);
		}
		return $reverse_message;
	}
	
