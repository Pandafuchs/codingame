var i = 0, A = "", B = "", N = parseInt(readline());
for (; i < N; i++) 
{
    A += i%2 == 0 ? readline()+"\n" : '';
    B += i%2 != 0 ? readline()+"\n" : '';
}
print((A+B).substr(0,(A+B).length - 1));
