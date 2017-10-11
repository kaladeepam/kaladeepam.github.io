#!/bin/sh
n=1;

for i in *.{jpg,JPG} ; 
do 
r=$(echo "stills${n}.jpg")

echo "renaming \"${i}\" to $r"
mv "${i}" "$r"
echo "converting $r"
convert ${r} -resize 218x146 -quality 80 ${r} ;

n=$(($n+1))
echo $n
done
