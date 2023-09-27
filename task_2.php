<?php
function Odd ($numbers) {
    if ($numbers % 2 !== 0) {
        return TRUE;
    } else {
        return FALSE;
    }
};

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(array_filter($numbers, "Odd"));
?>