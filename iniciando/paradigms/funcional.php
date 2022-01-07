<?php
$input = array (12,14,29,23,11,32,9);
$filter = function(int $age){
    return ($age >=18);
};
$output = array_filter($input,$filter);
echo '<pre>';
print_r($output);