#!"D:/Xampp/perl/bin/perl.exe"
print "Content-type:text/html\n\n";
use CGI;

$a = new CGI;
$name = $a->param("name");
$rand_num=rand(7);
@greet=('hello','hi','Salut','Bonjeur', 'love you', 'thank you', 'you are looking good');

print "$greet[$rand_num] $name";