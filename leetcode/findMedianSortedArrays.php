class Solution {
    function findMedianSortedArrays($nums1, $nums2) {
	     $arr = array_merge($nums1, $nums2); 
        sort($arr); 
        $count = count($arr); 
        if ($count % 2 == 1) 
        {
            return $arr[$count / 2]; 
        }
        else
        {
            return ($arr[intdiv($count, 2) - 1] + $arr[intdiv($count, 2)]) / 2; 
        }
    }
}
