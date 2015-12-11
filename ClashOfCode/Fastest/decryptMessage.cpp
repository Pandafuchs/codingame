#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

char intToChar(int integer)
{
    if(integer == -1) return ' ';
    return (char) ('z' - integer);
}

int main()
{
    int N;
    cin >> N; cin.ignore();
    for (int i = 0; i < N; i++) {
        int E;
        cin >> E; cin.ignore();
        cout << intToChar(E);
        
    }


}