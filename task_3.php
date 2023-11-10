<?php

$grades = [85, 92, 78, 88, 95];

function sortGrades( $grades ) {

    rsort( $grades );
    return $grades;
}

$afterSorting = sortGrades( $grades );
print_r( $afterSorting );

?>