#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int NumberOfSetBits(int i)
{
     i = i - ((i >> 1) & 0x55555555);
     i = (i & 0x33333333) + ((i >> 2) & 0x33333333);
     return (((i + (i >> 4)) & 0x0F0F0F0F) * 0x01010101) >> 24;
}

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        long long x;
        cin >> x; cin.ignore();
        cout << NumberOfSetBits(x) << endl;
    }

}