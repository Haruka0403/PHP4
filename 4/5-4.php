<?php

//①time
//1.Unixタイムスタンプの取得
//現在のタイムスタンプ
echo '現在のUnixタイムスタンプ：'.time(). "\n";
 
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek. "\n";

//②mktime
//指定した日時(2020/04/01)のタイムスタンプの取得
$timestamp = mktime(0, 0, 0, 4, 1, 2020);
echo '2020/04/01のタイムスタンプ: '.$timestamp.  "\n";

