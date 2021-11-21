<?php
function fn(array $array, array $arrayCriterion) {
	$keysOrdenacion = array_keys($arrayCriterion);
	$campo1  = array_column($array, $keysOrdenacion[0]);
	$campo2 = array_column($array, $keysOrdenacion[1]);
	$ordenacion1 = $arrayCriterion[$keysOrdenacion[0]] == 'ASC' ? SORT_ASC : SORT_DESC;
	$ordenacion2 = $arrayCriterion[$keysOrdenacion[2]] == 'ASC' ? SORT_ASC : SORT_DESC;
	
	array_multisort($campo1, $ordenacion1, $campo2, $ordenacion2, $array);

	return $array;
}


$array = [ 
 ['user' => 'Oscar', 'age' => 18, 'scoring' => 40], 
 ['user' => 'Mario', 'age' => 45, 'scoring' => 10], 
 ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78],  
 ['user' => 'Mario', 'age' => 45, 'scoring' => 78], 
 ['user' => 'Patricio', 'age' => 22, 'scoring' => 9], 
]; 

$sortCriterion = ['age' => 'DESC', 'scoring' => 'DESC'];

var_dump(fn($array, $sortCriterion));

