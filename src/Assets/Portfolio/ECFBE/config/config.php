<?php
// démarrer la session
//session_start();

// fonction qui permet de savoir si l'utilisateur est connecter ou non.
function isConnect() {
    if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
        return true;
    }
    return false;
}