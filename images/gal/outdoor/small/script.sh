#!/bin/sh

filePrefix="outdoor"
n=1;

for i in *.{jpg,JPG} ; 
do 
r=$(echo "outdoor${n}.jpg")

#echo "renaming \"${i}\" to $r"
#mv "${i}" "$r"
echo "converting $r"
convert ${r} -resize 218x146 ${r} ;
n=$(($n+1))
echo $n
done
