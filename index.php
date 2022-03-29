<?php

require 'Superhero.php';
require 'Avenger .php';

$spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');

print_r('<pre>'. $spiderman . '</pre>');

$spiderman->sayOneliner();

$thor = new Avenger('Thor', 'Male', 'For Asgard!');
$thor->sayOneliner();

print_r('pre'.$thor.'</pre>')

?>
l.l.l.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
    
</body>
</html>