<?php
function my_create_map (...$arrays) {
    $result = [];
    foreach ($arrays as $array) {
        if (sizeof($array) % 2 == 0) { 
            $pairs = array_chunk($array,2);
            foreach($pairs as $pairs) {  
                $key = $pairs [0];
                $value = $pairs [1];
                $result [$key] = $value;
            }
        } else {

            echo "The given arguments aren't valid.\n";
            return NULL;
        }
    }
    return $result;
}
?>