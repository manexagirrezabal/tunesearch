#!/usr/bin/python
import sys
import re
import os
import cgi
import envi

print "Content-Type: text/plain\n\n"

class search(object):
    
    def __init__(self):
        self.index5 = open(envi.indexdir+"/index.d5", 'r')
        self.mf = open(envi.indexdir+"/mappingFile.mf", 'r')
        
    def webEngineWrapper(self, pattWeb):
        pattEngine = re.sub("_", " ", pattWeb)
        return pattEngine

    def mapNumberTune(self, tn):
        self.mf.seek(0,0)
        for line in self.mf:
            line=line.rstrip()
            linev=line.split(",")
            if linev[1]==tn:
                return linev[0]
        return -1
    
    def searchInIndex(self, part):
        posibleak={}
        for line in self.index5:
            line=line.rstrip()
            linev=line.split("\t")
            linev[0]=linev[0].rstrip()
            if linev[0] == part:
                tuneNumber = linev[1]
                tune = self.mapNumberTune(tuneNumber)
                try:
                    posibleak[tune]=posibleak[linev[1]]+1
                except KeyError:
                    posibleak[tune]=1
        return posibleak
    
    def search(self, patt):
        pattEng = self.webEngineWrapper(patt)
        return self.searchInIndex(pattEng)

form = cgi.FieldStorage()
sar = form["intervals"].value
#print sar
#print envi.indexdir

eng = search()

print eng.search(sar)
