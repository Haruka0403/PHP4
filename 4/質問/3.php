<?php
//パターン１
function patarn1($arr) {
echo $arr[0] * $arr[1] * $arr[2] * $arr[3] *$arr[4] *$arr[5];
}

patarn1( array( 1, 3, 5, 7, 9 ) );

//パターン２
<?php
function patarn2( $arr ) {
    foreach ( $arr as $arrs ) {
        $product2 += $arrs;
        //上記だと和になる(*=?)
    }
    echo $product2";
}
patarn2( array( 1, 3, 5, 7, 9) );
