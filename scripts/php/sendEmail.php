<?php

if(isset($_POST['empresa']) && !empty($_POST['empresa'])){
    $empresa = addslashes($_POST['empresa']);
    $cnpj = addslashes($_POST['cnpj']);
    $nc = addslashes($_POST['nc']);
    $email = addslashes($_POST['email']);
    $tel = addslashes($_POST['tel']);

    $to = "vendas.marketing@gmail.com";
    $subject = "Contato ENT Games";
    $body = "Empresa: ".$empresa."\r\n".
            "CPNJ: ".$cnpj."\r\n".
            "N de colaboradores: ".$nc."\r\n".
            "E-mail: ".$email."\r\n".
            "Tefone: ".$tel.
    $header = "From:contato@entgames.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso");
    }else{
        echo("O email não pode ser enviado");
    }
}
?>