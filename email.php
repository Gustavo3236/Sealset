<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['tel']);
$message = addslashes($_POST['message']);

$to = "metalhead3236o@gmail.com";
$subject = "Contato - SEALSET Indústria e Comércio Ltda.";
$body = "Nome: ".$name. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Telefone: ".$tel. "\r\n".
        "Mensagem: ".$message;
$header = "From:metalhead3236o@gmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {

    echo("E-mail enviado com sucesso!");

} else {

    echo("O E-mail não pode ser enviado");

}

}

?>