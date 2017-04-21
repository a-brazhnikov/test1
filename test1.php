<?php
$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$resGlue = '';

foreach ($x as $v) {
    $resGlue = [
        $v => $resGlue
    ];
}

print_r($resGlue);