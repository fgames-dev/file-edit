#!/bin/sh
read -p "File to create (or edit): " file
read -p "Erase file before editing? Y/N " er
if [ $er = "n" ] || [ $er = "N" ]
then
echo "File contents: "
cat $file
read -p "Text to append: " text
echo $text >> $file
echo "File appended"
fi
if [ $er = "y" ] || [ $er = "Y" ]
then
rm $file
read -p "File contents: " txt
echo $txt >> $file
fi
echo "Program complete."
