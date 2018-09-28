#!/usr/bin/perl
use CGI qw(:standard);
use strict;
print "Content-type: text/html\n\n";

my $name = param ('name');
my @team = param ('team');
print "<html>\n";

print "<head>\n";

print "<style>\n";
print "h1 {\n";
print "   text-align: center;\n";
print "   color: teal;\n";
print "}\n";
print "</style>\n";

print "<title>CPS 530 Lab 4: Perl </title\n";

print "<body>\n";
print "<h1> Hello $name your favourite Toronto team's are @team</h1>";
print "</body>\n";

print "</head>\n";
print "</html>\n";
