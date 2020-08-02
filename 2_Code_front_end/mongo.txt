import pymongo
from pymongo import MongoClient
client = MongoClient("mongodb://127.0.0.1:27017")
print("Connection Successful")
db = client.placement
post = db.student.insert({'_id': "4",'usn':"4ff",'name': "r",'email':"s2@",'phno': "44444"});
print (post);
client.close();