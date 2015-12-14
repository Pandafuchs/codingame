#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;
int gcd(int a, int b) {
    return b == 0 ? a : gcd(b, a % b);
}

int main()
{
    int a;
    int b;
    cin >> a >> b; cin.ignore();
	
    cout << gcd( a,  b)  << endl;
}