class Solution {
    function numDecodings($s) {
        if ((int)$s[0] == 0) 
        {
            return 0;
        }
        $ln = strlen($s);
        for ($i = 0; $i < $ln - 1; $i++) {
            if ((int)$s[$i] > 2 && (int)$s[$i + 1] === 0) {
                return 0;
            }
        }
    
        $res[$ln] = 1; 

        for ($i = $ln - 1; $i >= 0; $i--) {
            if ((int)$s[$i] == 0) {
                $res[$i] = 0;
            } elseif ((int)$s[$i] > 2) {
                $res[$i] = $res[$i + 1];
            } elseif ((int)$s[$i] == 2 && (int)$s[$i + 1] > 6) {
                $res[$i] = $res[$i + 1];
            } else {
               $res[$i] = $res[$i + 1] + $res[$i + 2];
            }
        }
        return $res[0];   
    }
}
