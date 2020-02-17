<?php

/**
 * @param int $countHipsters
 * @param int $countSmoothies
 * @return int|null
 */
function countSmoothiesPerHipster(int $countHipsters, int $countSmoothies) {
    if ($countHipsters < 0 || $countSmoothies < 0) return null;

    return intdiv($countSmoothies, $countHipsters);
}