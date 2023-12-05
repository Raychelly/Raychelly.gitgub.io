<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    $para = "popdriveaplicativo@gmail.com";
    $assunto_email = "Nova Submissão de Formulário";
    $mensagem_email = "Nome: $nome\nEmail: $email\nAssunto: $assunto\nMensagem: $mensagem";

    // Você pode adicionar cabeçalhos adicionais, se necessário
    $cabecalhos = "From: webmaster@example.com";

    // Envia o e-mail
    mail($para, $assunto_email, $mensagem_email, $cabecalhos);

    // Redireciona para uma página de agradecimento ou exibe uma mensagem de sucesso
    header("Location: obrigado.html");
    exit();
}
?>