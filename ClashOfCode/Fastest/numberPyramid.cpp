#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    for(int i = 0; i < n; i++)
    {
        for(int j = 0; j < i+1; j++)
        {
            cout << n;
        }
        cout << endl;
    }
}