<?php

/**
 * @param string $prefix
 * @param string[] $arrayStr
 * @return string[]
 */
function findStrByPrefix(string $prefix, array $arrayStr) {
    $pattern = '|^' . $prefix . '|';
    $resultArr = [];
    foreach ($arrayStr as $str) {
        if (preg_match($pattern, $str)) {
            $resultArr[] = $str;
        }
    }

    return $resultArr;
}


//--------УДАЛИТЬ--------
$array1 = ['sss123nvjdfsss',
    'sshvfkj23',
    'sdjcjew',
    'jurjf823',
    'sss222',
    'ssssssss',
    'jsvsss',
    '_ssss',
    ' sssss',
    '.sssdedv',
    '',
    '  1svf'];
$pref1 = 'sss';

$array2 = [];

$pref2 = '11';
$pref3 = null;
$pref4 = '';
$pref5 = '  1';

print_r(findStrByPrefix($pref5, $array1));