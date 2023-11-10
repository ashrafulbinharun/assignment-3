<?php

$studentGrades = [
    'StudentOne'   => ['Math' => 90, 'English' => 82, 'Science' => 77],
    'StudentTwo'   => ['Math' => 98, 'English' => 85, 'Science' => 75],
    'StudentThree' => ['Math' => 91, 'English' => 89, 'Science' => 73],
];

function average( $studentGrades ) {

    $averageGrades = [];

    foreach ( $studentGrades as $student => $marks ) {

        $average                 = array_sum( $marks ) / count( $marks );
        $grade                   = grade( $average );
        $averageGrades[$student] = $grade;
    }

    return $averageGrades;

}

function grade( $marks ) {

    if ( $marks >= 80 ) {
        return 'A+';
    } elseif ( $marks >= 70 ) {
        return 'A';
    } elseif ( $marks >= 60 ) {
        return 'B';
    } elseif ( $marks >= 50 ) {
        return 'C';
    } elseif ( $marks >= 40 ) {
        return 'D';
    } else {
        return 'F';
    }

}

$calculateAverage = average( $studentGrades );

foreach ( $calculateAverage as $student => $average ) {

    echo "$student: Average Grade = $average\n";

}

?>