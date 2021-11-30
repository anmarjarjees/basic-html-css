<?php
/*
PHP Comments:
Here is my PHPfile with the extension .php
The file icon is Elephant :-)

The ElePHPant is the adorable, elephantine mascot of the PHP project.
Link: https://www.php.net/elephpant.php
*/

// Another way of using comment in PHP
/*
Variables:
Variables are just containers in the memory to contain/save any type of value.
So a variable can have/save a text value, numbers, and others...


Like Algebra:
x = 1
y = 2
z = x + y => z = 3
In PHP variable names have to start with $
*/

// All the names and their values will be saved into PHP $_POST[] since our method is post
// All the names and their values will be saved into PHP $_GET[] if our method is get 

/*
Creating different varaible names for saving the values from the input fields:
*/
$firstName = $_POST['first-name'];
$lastName =  $_POST['last-name'];
$email =  $_POST['email'];
$computerType = $_POST['comptype'];
$progLanguages = $_POST['prog-lang'];

// and so on for the rest of the form field...
?>