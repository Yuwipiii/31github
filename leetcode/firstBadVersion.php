/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $l = 1; 
        $r = $n; 
        while($l <= $r){ 
            $mid =floor(($r-$l)/2+$l); 
            if(!$this->IsBadVersion($mid)){ 
                $l = $mid+1; 
            }
            else{ 
                $r = $mid-1;
            }
        }
        return $l;
    }
}
