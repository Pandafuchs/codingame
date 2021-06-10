import sys
import math

j=0
for i in input():
    if(i=="*"):j+=1
    elif(j%2==0 and i!="."):print(i,end='')
