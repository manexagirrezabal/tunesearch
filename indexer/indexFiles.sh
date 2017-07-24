#!/bin/sh

filenamejava="Index.java"
filenameclass="Index.class"
modsecsjava=$(stat --format '%Y' $filenamejava)
modsecsclass=$(stat --format '%Y' $filenameclass)
#nowsecs=$(date +%s)
#echo $nowsecs
#echo $modsecs
#delta=$(($nowsecs-$modsecsjava))
echo "Filejava $filenamejava was modified in $modsecsjava"
echo "Filejava $filenameclass was modified in $modsecsclass"

if [ $modsecsjava -gt $modsecsclass ]; then
  echo "Index.java is old! I've to compile it!"
  javac Index.java
fi

rm ../index/index.d5
#java Index ../data/midi/liburuki5_2714a.mid

for i in ../data/midi/*.mid
do
    echo "Indexing $i file..."
    java Index $i >> ../index/index.d5
done

