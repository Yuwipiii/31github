class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $res=[]; 

        for($i =0;$i < count($arr);$i++){ 
            $res[$arr[$i]]++; 
        }
        foreach($res as $key=>$value){ 
            if($value == 1){
                $k--; 
                if($k == 0){ 
                    return $key;
                }
            }
        }
        return ''; 
    }
}
