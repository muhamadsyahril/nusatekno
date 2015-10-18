<?php
function cari_nilai($bilangan, $cari)
{
    foreach ($bilangan as $key => $value) {
        if ($cari == $value) return $key;
    }
    return -1;
}

$bilangan = [3, 1, 2, 5, 6, 7, 8, 7];

echo cari_nilai($bilangan, 3) . '<br>';
echo cari_nilai($bilangan, 5) . '<br>';
echo cari_nilai($bilangan, 7) . '<br>';
echo cari_nilai($bilangan, 9) . '<br>';