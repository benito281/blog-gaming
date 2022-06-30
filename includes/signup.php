<?php

if (isset($_POST)) {
    //Conexión a la base de datos y validaciónes del formulario
    require_once 'conection.php';
    include 'validations.php';
    
    //Parametros de entrada
    $username = isset($_POST["signupName"]) ? $_POST["signupName"] : false;
    $userlastname = isset($_POST["signupLastname"]) ? $_POST["signupLastname"] : false;
    $usernameblog = isset($_POST["signupUsernameBlog"]) ? $_POST["signupUsernameBlog"] : false;
    $userpassword = isset($_POST["signupPass"]) ? $_POST["signupPass"] : false;
    $useremail = isset($_POST["signupEmail"]) ? $_POST["signupEmail"] : false;
    
    /* Validación de campos ingresados */
    if (usernameValidate($username) === false) {
        echo json_encode(["message" => "error-nombre"]);
    }
    elseif (useremailValidate($useremail) === false){
        echo json_encode(["message" => "error-correo"]);
    }
    else{
                            /* Insertar usuarios en la BD */

        /* Encriptamos la contraseña */
       /*  $passwordEncrypt = password_hash($userpassword, PASSWORD_BCRYPT, ["cost" => 10]);

        $query = "INSERT INTO users (user_name,user_lastname,username_blog, user_pass, user_email, date) VALUES (:user_name, :user_lastname, :username_blog, :user_pass, :user_email, CURDATE());";
        $result = $db->prepare($query);
        
        $result->execute([":user_name" => $username, ":user_lastname" => $userlastname, ":username_blog" => $usernameblog, ":user_pass" => $passwordEncrypt, ":user_email" => $useremail]);
        if ($result) {
            echo json_encode(["message" => 200]);
        }
        else{
            echo json_encode(["status" => 404]);
        } */
        echo json_encode(["username" => $username]);
        
    }
    
}

?>