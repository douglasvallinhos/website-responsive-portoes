<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$headers = "From: ". $nome;

$corpoemail = 'Fale Conosco - Portoes Guarulhos
              Nome: '     .$nome.'
              Email:'     .$email.' 
              Mensagem:'  .$mensagem.' ';

if(mail("contato@portoesguarulhos.com.br", "WebSite Portoes Guarulhos",$corpoemail,$headers)){
    $_SESSION['msg3'] = "<h4 class='center green-text wow heartBeat'><b>".'Mensagem enviada com sucesso! Em breve, nossa equipe irá retornar o seu contato. Obrigado!'."</b></h4><br>";
    header("Location: confirmar_email.php");

} else{
    $_SESSION['msg3'] = "<h4 class='center red-text wow heartBeat'><b>".'ERRO! Sua mensagem NÃO foi enviada. Envie sua mensagem diretamente para o email'."<p class='text-danger'>".'contato@portoesguarulhos.com.br'."</p></b></h4><br>";
    header("Location: confirmar_email.php");
}

?>
    
</body>
</html>


