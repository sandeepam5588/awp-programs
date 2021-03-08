#!/usr/bin/perl.exe
 use CGI':standard';
 #refresh the display every second
 print "Refresh:1\n";
 print "Content-type:text/html\n\n";
 ($s,$m,$h)=localtime(time);
 print "The current server time is $h:$m:$s";
 print "In words,the time is- $h hours, $m minutes and $s seconds";