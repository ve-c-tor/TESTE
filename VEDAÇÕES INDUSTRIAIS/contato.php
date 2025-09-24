<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    // Exemplo simples: apenas mostra os dados na tela
    echo "<h2>Obrigado pelo contato, $nome!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";

    // -------- OPCIONAL --------
    // Para enviar por e-mail (se o servidor permitir)
    /*
    $to = "diogo@revedacoes.com.br";
    $subject = "Novo contato do site";
    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email enviado com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar o email.</p>";
    }
    */
}
?>