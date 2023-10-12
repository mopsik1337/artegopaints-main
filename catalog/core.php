<?php
	include_once "functions.php";

			 $filterItems = array();
			 // Получаем список всех папок
			 $arrayItems = getFileList('items');

			 foreach ($arrayItems as $item) {
			 	$itemName = explode("/", $item['name']);
			 	$arrayInfo = file_get_contents('items/' . $itemName[1] . '/info.txt');
			 	$itemInfo = explode("|",$arrayInfo);

			 	foreach ($itemInfo as $key) {
			 		if(in_array($key, array_unique($_GET['filters']))){
			 			foreach ($filterItems as $nn => $res) {	
			 				$number = $nn;
			 				
			 			}
			 			if($itemName[1] != $filterItems[$number]['name']){
			 				$filterItems[] = array('name' => $itemName[1], 'category' => $itemInfo[2], 'price' => $itemInfo[0], 'color' => $itemInfo[1], 'size' => $itemInfo[3]);
			 				
			 			
			 				
			 				
			 			}
			 		}
			 	}
			 	
			 	
			 }

			print_r(json_encode($filterItems));
			
			 

			
		
?>