<?php

//date

//①現在の日時をtimeを使って表示
echo date('Y/m/d', time()). "\n";

 
//②3日後の日時をtimeを使って表示
$nweek = time() + (3 * 24 * 60 * 60);
echo date('Y/m/d', $nweek). "\n";
//5-4.php1で取得したタイムスタンプで表示
echo date('Y/m/d', 1588743024);