import smtplib
import random
import sys
import string

server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login("placeofficialjnn@gmail.com", "GANESHsanath@2018")

server.sendmail("placeofficialjnn@gmail.com", sys.argv[1],sys.argv[2])
server.quit()
