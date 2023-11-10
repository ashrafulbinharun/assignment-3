<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers( $n ) {
    return $n % 2 != 0;
}

$evenNumbers = array_filter( $numbers, "removeEvenNumbers" );
print_r( $evenNumbers );

?>