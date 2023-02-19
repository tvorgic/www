<?php

//prvo ce se odraditi kontrole treba li uopće ici 
//autorizirati

//ide autorizacija u bazu ali sada radim fiksno

if (
    $_POST['email'] === 'edunova@edunova.hr' &&
    $_POST['lozinka'] === 'edunova'
) {
    session_start();
    $_SESSION['auth'] = true;
    header('location: zasticeno.php');
} else {
    header('location: index.php');
}
