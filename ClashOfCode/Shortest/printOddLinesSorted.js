var i = 0, A = "", B = "", N = parseInt(readline());
for (; i < N; i++) {
	r=readline;
	i%2 ? B+=r() + '\n': A += r()+ '\n'
}
print((A+B).substr(0,(A+B).length - 1));
