#!/bin/bash

if [ "$0" != '-bash' ];
then
  echo "It may not work"
  echo
  echo "Use the command like this: \". setConfig.sh\""
  exit
fi

. config.sh


echo "ln -s $TUNESEARCHHOME/search/search.py $CGI_LIBHOME/search.py"
ln -s $TUNESEARCHHOME/search/search.py $CGI_LIBHOME/search.py
echo "ln -s $TUNESEARCHHOME/interf $WEBSERVER/tuneSearch"
ln -s $TUNESEARCHHOME/interf $WEBSERVER/tuneSearch

echo
echo
echo
echo "interf/manex.js: Set bilatuNotak() function in manex.js with the correct CGI_LIB directory"
echo "search/envi.py : Also you should set environment parameters in envi.py"
echo

