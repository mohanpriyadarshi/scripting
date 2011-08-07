#!/usr/bin/env php
<?php
# keyboard input function 
function keyinput()
{
$in=fopen("php://stdin","r");
$input=fgets($in,255);
fclose($in);
return $input;
}
$a=keyinput();
print "super $a \n";
#reading from a file and display the content 
function fileread($fpath)
{
print "$fpath \n";
$inf=fopen($fpath,"r");
while (!feof($inf))
{
$line=fgets($inf,256);
print "$line";
}}
$fpath="readme";
fileread($fpath);
?>
