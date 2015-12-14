import sys
import math
n = int(raw_input())
size = n
inner_size = size - 2
print ('#' * size)
for i in range(inner_size):
    print ('#' + ' ' * inner_size + '#')
if size > 1:   
    print ('#' * size)
