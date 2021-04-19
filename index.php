<?php
$data = ['C0318G', 'M0318G', 'P0323A'];

function checkClass($str)
{
    $regexp = '/^[C|A|P]\d{4}[G-M]/';
    if (preg_match($regexp, $str)) {
        echo ("$str is a valid class.") . '<br>';
    } else {
        echo ("$str is a invalid class.") . '<br>';
    }
}

foreach ($data as $class) {
    checkClass($class);
}
