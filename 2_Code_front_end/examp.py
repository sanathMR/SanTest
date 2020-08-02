import smtplib
import random
import string

server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login("panchajanya27@gmail.com", "Vistara#25")
pwlist = ([random.choice(string.digits) for i in range(1)]+
           [random.choice(string.ascii_letters) for i in range(5)])
random.shuffle(pwlist)
pw = ''.join(pwlist)



server.sendmail("panchajanya27@gmail.com", "srirachitha275@gmail.com",pw)
server.quit()