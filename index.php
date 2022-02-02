<?php

require './classes/Email.php';

$mail1 = new Email("damien.olivier.do@gmail.com", "damienolivierdo511@gmail.com", "Bonjour, je suis un message cool","BROOOOOOOOO");

$mail1->send();