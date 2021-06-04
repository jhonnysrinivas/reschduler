n = int(input())
r_count = 0
m_count = 0
a = list(input().split())
for i in a[1]:
	if(i == 'r'):
		r_count += 1
	else:
		m_count += 1
count = 0
for i in range(a[0]):
	if(a[0][i] == 'r' and r_count > 0):
		r_count -= 1
		count += 1
		continue
	if(a[0][i] == 'm' and m_count > 0):
		m_count -= 1
		count += 1
		continue
	break
print(len(a[0]) - count)
