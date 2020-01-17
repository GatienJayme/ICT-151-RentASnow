<?php
/*  Program: Rent a snow controller
    Author: Gatien Jayme
    Date: 16.01.2020
    Version: 1.0
*/
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function snows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

function details($snowid){
    $listsnows = getSnows();
    //foreach($)
    require_once 'view/details.php';
}

function login() {
    require_once 'view/login.php';
}

function connect() {
    if(isset($_POST['envoyer'])) {
        $username = $_POST['pseudo'];
        $password = $_POST['mdp'];
    }
    if($username=='Gatien' && $password=='1234567') {
        $_SESSION['username'] = $username;
    }
require_once 'view/home.php';
}

function disconnect() {
    unset($_SESSION['username']);
    require_once 'view/home.php';
}
?>
