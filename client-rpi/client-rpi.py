import os, json

url="https://helloworld.co.in/demo/rest-api/data.php"
#url="http://192.168.1.3/demo/rest-api/data.php"

''' curl is used to make a http request '''
cmd="curl -s " + url
print (cmd)
print("\n")

try:
	'''Make the web request and store the json data obtained from web resource in a variable  '''
	result=os.popen(cmd).read()
	print (result)
	
	'''parse the json data'''
	arr=json.loads(result)
	#print(json.dumps(arr,indent=1)) #pretty print json data
	
	'''access the elements and use in the code'''
	temp = arr["1"]["temp"]
	hum = arr["1"]["hum"]
	pres = arr["1"]["pres"]

	print("\n")
	print("Temperature:",temp)
	print("Humidity:", hum)
	print("Pressure:",pres)
except Exception as e:
	print(e)
