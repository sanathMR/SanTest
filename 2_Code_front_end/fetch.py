import pymongo
from pymongo import MongoClient
client = MongoClient("mongodb://127.0.0.1:27017")
db = client.placement
result = db.academic2019.find();


def predict(sslc,puc,first,second,third,fourth,fifth,logs):
	avg1=first+second+third+fourth+fifth
	avg1=avg1/5
	arr1=fifth - fourth

	arr2=fourth - third
	arr3=third - second
	arr4=second - first
	change=arr1+arr2+arr3+arr4
	change/=4
	avg2=fifth + change
	
	if sslc>puc:
		a=-0.02
	else:
		a=0.02
	
	avg=avg1+(a*avg2)
	i=0.0
	for l in [1,logs+1]:
		i=i+0.01
	avg=avg-(i*avg2)
	print (avg);
	return(avg);
	
	
	
for obj in result:
	username=obj['usn']
	sslc=obj['sslc']
	puc=obj['puc']
	_1st=obj['1st']
	_2nd=obj['2nd']
	_3rd=obj['3rd']
	_4th=obj['4th']
	_5th=obj['5th']
	logs=obj['logs']
	if _1st is None:
		_1st =_3rd;
	if _2nd is None:
		_2nd = _4th;
	if isinstance(logs,int):
		logs=0;
	print (sslc);
	print (puc);
	print (_1st);
	print (_2nd);
	print (_3rd);
	print (_4th);
	print (_5th);
	print (logs);
	if (isinstance(sslc, str) or isinstance(puc, str) or isinstance(_1st, str) or isinstance(_2nd, str) or isinstance(_3rd, str) or isinstance(_4th, str) or isinstance(_5th, str) or isinstance(logs, str)):
			continue

	avg=predict(sslc=sslc,puc=puc,first=_1st,second=_2nd,third=_3rd,fourth=_4th,fifth=_5th,logs=logs);
	pr6th= avg;
	db = client.placement;
	db.academic2019.update({"usn": username},{"$set": {"prcon":pr6th}});
	agr=_1st+_2nd+_3rd+_4th+_5th+avg;
	agr=agr/6;
	db.academic2019.update({"usn": username},{"$set": {"agre":agr}});
