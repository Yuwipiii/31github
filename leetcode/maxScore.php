<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxScore($s) {
        $sum = 0; 
        $zero = 0; 
        $one =0;
        for($j = 0;$j < strlen($s);$j++){ 
            if($s[$j] == '1'){ 
                $one++;
            }
        }

        for($i =0;$i < strlen($s)-1;$i++){ 
            $zero += $s[$i] == '0'?1:0; 
            $one  -= $s[$i] == '1'?1:0;
            $sum = max($sum,$zero+$one);  
        }
        return $sum;
    }
}
