<?php

if (isset($_POST['email']) && !empty($_POST['email']) ){
    $email = addslashes($_POST['email']);
    $msg =  addslashes($_POST['message']);
    $sub = addslashes($_POST['subject']);

    $to = "vagner@alugafacilubatuba.com.br";
    $subject  = $sub;
    $body = "Email: ".$email. "\r\n Mensagem: " .$msg ;

    $header = "From: vagnercorrearevocio@hotmail.com" . "\r\n"
    . "Replay-to: ".$email. "\r\n"
    ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("Obrigado por entrar em contato, logo te responderemos!");
    }else{
        echo ("Ouve um erro ao enviar o email");
    }
}
