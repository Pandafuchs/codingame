#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string l;
    getline(cin, l);
    
    int i = 0;
    for(; i < l.length(); i++)
    {
        cout << (char) (l[i] + i);
    }

    
}