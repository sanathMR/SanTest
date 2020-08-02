from keras.models import Sequential
from keras.layers import Dense
from keras.layers.core import Activation
from keras.layers.recurrent import LSTM
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
data=pd.read_csv('data.csv','r',error_bad_lines=False,delimiter=',')
# print(data.head())

data.drop('name',inplace=True,axis=1)
# print(data.head())

input=data[['1st','2nd','3rd','4th']]
output=data[['5th','6th']]

X=np.array(input,dtype=np.float32)
Y=np.array(output,dtype=np.float32)
X=np.round(X,decimals=1)
Y=np.round(Y,decimals=1)

X_train, X_test, Y_train, Y_test = train_test_split(X,Y, test_size = 0.33)
model=Sequential()

model.add(Dense(12,input_dim=X_train.shape[1]))
#model.add(LSTM(4))
model.add(Dense(2))
model.compile(loss='mean_squared_error',optimizer='adam')

# print(X[:3],'\n\n',Y[:3])
print(model.summary())

model.fit(X_train.reshape(-1,4),Y_train,epochs=150,batch_size=32,verbose=2)
model.evaluate(X_test.reshape(-1,4),Y_test.reshape(-1,2))
model.predict(np.array([7.5,7.9,8.4,7.9]).reshape(-1,4)) #,7.316,7.027
X_train.shape[1]
i=np.array([[1,2,3,4],[5,6,7,8]])
i
i.reshape(-1,4)
