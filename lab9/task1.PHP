<?php
$name = 'Joe';
/*function say_hello($name)
{
    print 'Hello, ';
    print $name;
}

function say_goodbye($name)
{
    print 'Goodbye, ';
    print $name;
}
*/

function say_hello()
{
    print 'Hello, ';
    global $name;
}
 say_hello();
 print $name;

/*say_hello($name);
print "<br>";
say_goodbye($name);
*/
?>
