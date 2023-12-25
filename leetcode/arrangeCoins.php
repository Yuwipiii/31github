class Solution {
public:
    int arrangeCoins(int n) {
        int s =1; 
        int e =n; 
        int res; 

        long long mid = s+(e-s)/2; 

        while(s <= e){ 
            long long calc = mid*(mid+1)/2;
            if(calc <= n){ 
                res = mid;
                s = mid+1;
            }
            else if(calc >n){ 
                e = mid-1;
            }
            mid = s+(e-s)/2;
        }
        return res;
    }
};
