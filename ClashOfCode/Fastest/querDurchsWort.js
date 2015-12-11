var N = parseInt(readline());
var word1 = "", word2 = "";
for (var i = 0; i < N; i++) {
    var line = readline();
    word1 += line.substr(i,1);
    word2 += line.substr(N-i-1,1);
}
print(word1 + " " + word2);