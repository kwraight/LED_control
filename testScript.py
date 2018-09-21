#!/usr/bin/env python

import argparse
import sys
import os


######################
### parsing
######################

onStates=["on","true"]
offStates=["off","false"]

parser = argparse.ArgumentParser(description="test arguments")

parser.add_argument('--set', help='set state (on/off, true/false)')
args = parser.parse_args()

selected=False
output="NYS"
if args.set!=None:
    for s in onStates:
        if s == args.set.lower():
            output="setting ON"
            break
    for s in offStates:
        if s == args.set.lower():
            output="setting OFF"
            break
else:
    output="no state set. Enter state."


cwd = os.getcwd()
f = open(cwd+"/file2fill.txt",'w')
f.write(output)
f.close()


sys.stdout.write(output) 
