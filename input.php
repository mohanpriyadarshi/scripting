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
?>
