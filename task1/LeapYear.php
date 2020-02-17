<?php
$year = $_POST['year'];

if (strlen($year) < 0 || strlen($year) > 18 || preg_match('|^[\d]*$|', $year) == 0 || $year < 1) {
    echo 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
} else {
    if ($year % 4 !== 0) {
        echo 'НЕТ';
    } else {
        if ($year % 100 !== 0) {
            echo 'ДА';
        } else {
            if ($year % 400 === 0) {
                echo 'ДА';
            } else {
                echo 'НЕТ';
            }
        }
    }
}