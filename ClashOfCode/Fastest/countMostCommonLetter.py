import collections
print(collections.Counter(''.join(input().split())).most_common(1)[0][1])