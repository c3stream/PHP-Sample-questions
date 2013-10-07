<?php
	// 配列値チェックの並べ替え
	// $a = array(1,8,4,9,2,8,0);
	// $b = array(3,4,7,8,3);
	
	$a = array(1,8,4,9,2,8,0);
	$b = array(3,4,7,8,3);
	
	$return = filter($a,$b);
	
	print_r($return);
	
	function filter($a, $b){
		$return = array();
		foreach($a as $a_val){
			$is_hit = false;
			foreach($b as $b_val) {
				if($b_val === $a_val){
					$is_hit = true;
				}
			}
			if($is_hit == false){
				$return[] = $a_val;
			}
		}
		return $return;
	}