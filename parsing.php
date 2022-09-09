<?php

//$res = preg_replace('~\{(?:[^{}]|(?R))*\}~', '', $text);
$open= fopen("result.json", "r");

// if ($logfile) {
//     while (($line = fgets($logfile)) !== false) {
//         if (preg_match_all("/[^:]*/", $line, $matched)) {
//             foreach ($matched as $val) {
//                 foreach ($val as $read) {
//                     echo '<pre>'. $read . '</pre>';
//                 }
//             }
//         }
//     }

//     fclose($logfile);
// } else {
//     die("Unable to open file.");
// }
$data = file_get_contents("https://intra.epitech.eu/module/2022/W-COL-502/PAR-2-1/acti-523493/project/file/fiche_exemple_batman.html") ;


preg_match("/<section class='header poster'>(.*)<\/div>/",$data,$tittle) ;

 $title_out = $tittle[0] ;

 echo "/<section class='header poster'>(.*)<\/div>/" ;
