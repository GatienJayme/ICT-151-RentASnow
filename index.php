<?php

require "controler/controler.php";

home();

$listofsnowboard = [
    [
        "dfhe2323" => "133",
        "sfh23" => "342"
    ],
    [
        "agaer46" => "236",
        "dg4" => "457"
    ],
    [
        "jh34" => "255",
        "b34" => "462"
    ],
    [
        "fh567" => "244",
        "dje56" => "235"
    ],
];
file_put_contents('listofsnowboard.json',json_encode($listofsnowboard));
?>
