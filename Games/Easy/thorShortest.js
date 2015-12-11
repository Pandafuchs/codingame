var k = readline().split(' ');
function p(n){
    return parseInt(k[n]);
}

var h = p(2) - p(0);
var g = p(3) - p(1);

// game loop
while (1) {
    var r = parseInt(readline()); // The level of Thor's remaining energy, representing the number of moves he can still make.

    var x = "";
    var y = "";
    
    if(h > 0)
    {
        x = "W";
        h--;
    }
    if(h < 0)
    {
        x = "E";
        h++;
    }
    if(g > 0)
    {
        y = "N";
        g--;
    }
    if(g < 0)
    {
        y = "S";
        g++;
    }
    print(y + x);
}