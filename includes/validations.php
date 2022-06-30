<?php
/* Validar nombre */
function usernameValidate($username){
    if (empty($username)) {
        return false;
    }
    elseif(is_numeric($username)){
        return false;
    }
    elseif(preg_match("/[0-9]/", $username)){
        return false;
    }
    else{
        return true;
    }
}
/* Validar correo */
function useremailValidate($email){
    if (empty($email)) {
        return false;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    else{
        return true;
    }
}
/* Validar contraseña */
function userpassword($pass){
    if (empty($pass) || strlen($pass) < 8) {
        return false;
    }
    else{
        return true;
    }
}