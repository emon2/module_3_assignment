<?php
$numbers = array( 85, 92, 78, 88, 95);
rsort($numbers);
function sort_desc($numbers) {   
foreach ($numbers as $value) {
    echo $value . "\t";
} 
}
sort_desc($numbers);
?>