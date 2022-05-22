<?php

$INPUT = ['xc', 'dz', 'bbb', 'dz'];
$QUERY = ['bbb', 'ac', 'dz'] ;
$data = array_map(function($id) use ($INPUT){
	return count(array_filter(
        	$INPUT, function($itemInput) use($id){
            	if($itemInput == $id){
					return $itemInput;
                }
            }
        ));
},$QUERY);

print_r($data);