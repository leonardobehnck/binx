<?php
// Verifica se os campos estão preenchidos
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    // Coleta os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['msg'];

    // Configurações do e-mail
    $destinatario = "binx.arq@gmail.com"; // Insira o e-mail para onde deseja enviar a mensagem
    $assunto = "Nova mensagem de contato do website.";

    // Constrói o corpo do e-mail
    $corpo_email = "Nome: $name\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$msg";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente.";
    }
} else {
    echo "Todos os campos do formulário devem ser preenchidos.";
}
?>