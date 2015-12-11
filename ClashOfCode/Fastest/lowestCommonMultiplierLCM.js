function LCM(A)
{   
    var n = A.length, a = Math.abs(A[0]);
    for (var i = 1; i < n; i++)
     { var b = Math.abs(A[i]), c = a;
       while (a && b){ a > b ? a %= b : b %= a; } 
       a = Math.abs(c*A[i])/(a+b);
     }
    return a;
}

var N = parseInt(readline());
var inputs = readline().split(' ');

for (var i = 0; i < N; i++) {
    inputs[i] = parseInt(inputs[i]);
}

print(LCM(inputs));