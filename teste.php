<?php
// IPs de teste (IPs públicos fornecidos pelo ngrok)
$matheus_ip = 'IP_PÚBLICO_DE_MATHEUS'; // Substitua pelo IP público de Matheus
$alemao_ip = 'IP_PÚBLICO_DE_ALEMAO'; // Substitua pelo IP público de Alemão

// Função principal para controle de redirecionamento
function redirectBasedOnRequest() {
    global $matheus_ip, $alemao_ip;
    $user_ip = $_SERVER['REMOTE_ADDR'];

    if ($user_ip === $matheus_ip) {
        // Redireciona IP de Matheus para um site alternativo
        header("Location: https://example.com/"); // Substitua por um site alternativo
        exit();
    } elseif ($user_ip === $alemao_ip) {
        // Mantém o conteúdo para o IP de Alemão
        echo file_get_contents('index.html');
        exit();
    } else {
        // Continue com o conteúdo normal do site
        echo file_get_contents('index.html');
    }
}

// Executa a função de redirecionamento
redirectBasedOnRequest();
?>
