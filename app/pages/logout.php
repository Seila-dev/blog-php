<?php 
session_start();

if (!empty($_SESSION['USER'])) {
    unset($_SESSION['USER']);
}

redirect('home');
?>
