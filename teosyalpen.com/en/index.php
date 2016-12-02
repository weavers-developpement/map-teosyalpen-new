<?php
    session_start();
    $_SESSION['lang'] = 'en';
   $redirect = 'http://www.teosyalpen.com/';            
    header('Location:' .$redirect);
    die();
?> 