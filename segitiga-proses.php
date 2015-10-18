<?php
class Segitiga
{
    function generate_a($character, $length)
    {
        $result = '';
        for ($i = 1; $i <= $length; $i++) {
            for ($x = 1; $x <= $i; $x++) {
                $result .= $character;
            };
            $result .= '<br>';
        };
        return $result;
    }

    function generate_b($character, $length)
    {
        $result = '';
        for ($i = $length; $i >= 1 ; $i--) {
            for ($x = 1; $x <= $i; $x++) {
                $result .= $character;
            };
            $result .= '<br>';
        };
        return $result;
    }

    function generate_c($character, $length)
    {
        $result = '';
        for ($i = 1; $i <= $length; $i++) {
            for ($x = 1; $x <= $length - $i; $x++) {
                $result .= '&nbsp;';
            };
            for ($y = 1; $y <= $i; $y++) {
                $result .= $character;
            };
            $result .= '<br>';
        };
        return $result;
    }

    function generate_d($character, $length)
    {
        $result = '';
        for ($i = $length; $i >= 1; $i--) {
            for ($x = 1; $x <= $length - $i; $x++) {
                $result .= '&nbsp;';
            };
            for ($y = 1; $y <= $i; $y++) {
                $result .= $character;
            };
            $result .= '<br>';
        };
        return $result;
    }
}

$type = $_POST['type'];
$character = $_POST['character'];
$length = $_POST['length'];

$segitiga = new Segitiga;
switch ($type) {
    case 'a':
        echo $segitiga->generate_a($character, $length);
        break;
    case 'b':
        echo $segitiga->generate_b($character, $length);
        break;
    case 'c':
        echo $segitiga->generate_c($character, $length);
        break;
    case 'd':
        echo $segitiga->generate_d($character, $length);
        break;
}