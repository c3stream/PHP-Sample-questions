<?php 
	// $row = array(
	//            array('id' => '100', 'name' => 'abc'),
	//            array('id' => '20',  'name' => 'cdb'),
	//            array('id' => '50',  'name' => 'vbn')
	//        );
	// 'id' をソートする
	
	$rows = array(
	           array('id' => '100', 'name' => 'abc'),
	           array('id' => '20',  'name' => 'cdb'),
	           array('id' => '50',  'name' => 'vbn')
	       );

	$return = sort_array($rows);
	print_r($return);
	
	function sort_array($rows){
		foreach ($rows as &$row){
			$tmp[] = &$row["id"]; 
		}
		array_multisort($tmp, $rows);
		
		return $rows;
	}