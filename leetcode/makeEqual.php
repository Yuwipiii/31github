class Solution {

    /**
     * @param String[] $words
     * @return Boolean
     */
    function makeEqual($words) {
        $word = []; 
        $count = count($words); 
        if($count ==1 ){ 
            return true;
        }
        $char = 0; 
        for($i=0;$i < count($words);$i++){
            $char += strlen($words[$i]);  
            for($j =0;$j < strlen($words[$i]);$j++){ 
                $word[$words[$i][$j]]++;  
            }
        }    
        if($chars % $count != 0){ 
            return false; 
        }
        foreach($word as $value){ 
            if($value % $count != 0){ 
                return false;
            }
        }
        return true;
    }
}
