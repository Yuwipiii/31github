<?php
class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        usort($points, function($a,$b){
            return $a[0]-$b[0];
        });
        $max = 0;
        for($i = 1;$i < count($points);$i++){
            $w = $points[$i][0]-$points[$i-1][0];
            if($w > $max){
                $max = $w;
            }
        }
        return $max;
    }
}
