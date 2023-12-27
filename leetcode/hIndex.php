class Solution {
public:
    int hIndex(vector<int>& citations) {
        int l = 0; 
        int len = citations.size();
        int r = len-1;
        int mid; 
        while(l <= r){ 
            mid = (r+l) >>1; 
            if(citations[mid]  == len-mid){ 
                return citations[mid]; 
            }
            else if(citations[mid] > len-mid){ 
                r = mid-1; 
            }
            else { 
                l  = mid+1; 
            }
        }
        return len -(r+1); 
    }
};
