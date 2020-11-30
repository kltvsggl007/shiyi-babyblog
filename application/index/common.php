<?php
 function arr_unique($arr2d){
 	foreach ($arr2d as $key => $value) {
 		$value=join(',',$value);
 		$temp[]=$value;
 	}
 	if ($temp) {
 		$temp=array_unique($temp);
	 	foreach ($temp as $key => $value) {
	 		$temp[$key]=explode(',',$value);
	 	}
	 	return $temp;
 	}
 	
 }
