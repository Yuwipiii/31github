<?php
class Solution {

    /**
     * @param String $path
     * @return Boolean
     */
    function isPathCrossing($path) {
        $x =0;
        $y =0;
        $key = $x."|".$y;
        $was[] = $key;
        for($i =0;$i < strlen($path);$i++){
            $temp = $path[$i];
            if($temp =='N'){
                $y++;
            }
            else if($temp == "E"){
                $x++;
            }
            else if($temp == "S"){
                $y--;
            }
            else{
                $x--;
            }

            $key= $x."|".$y;
            if(in_array($key,$was)){
                return true;
            }
            $was[]= $key;
        }
        return false;

    }
}
