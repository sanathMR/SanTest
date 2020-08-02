import pymongo
from pymongo import MongoClient
client = MongoClient("mongodb://127.0.0.1:27017")
db = client.placement
result = db.academic2019.find();


	
	
	
for obj in result:
	username=obj['usn']
	db.academic2019.update({"usn": username},{"$set": {"prcon":"0"}});
	db.academic2019.update({"usn": username},{"$set": {"prann":"0"}});
	db.academic2019.update({"usn": username},{"$set": {"agre":"0"}});
