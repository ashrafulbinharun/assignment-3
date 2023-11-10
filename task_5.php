<?php

function generatingPassword( $length ) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password   = '';

    $charactersLength = strlen( $characters );

    for ( $i = 0; $i < $length; $i++ ) {
        $password .= $characters[mt_rand( 0, $charactersLength - 1 )];
    }

    return $password;
}

$passwords = generatingPassword( 12 );

echo $passwords;

?>