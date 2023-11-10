<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifiedText( $text ) {

    $afterModified = strtolower( str_replace( 'brown', 'red', $text ) );
    echo $afterModified;
}

modifiedText( $text );

?>