<?php
//パターン１
function patarn1($arr) {
echo $arr[0] * $arr[1] * $arr[2] * $arr[3] *$arr[4] *$arr[5];
}

patarn1( array( 1, 3, 5, 7, 9 ) );

//パターン２
function patarn2( $arr ) {
    $ret = 1;
    foreach ( $arr as $value ) {
        $ret *= $value;
    }
    return $ret;
}
echo patarn2( array( 1, 3, 5, 7, 9) ) . "\n";
