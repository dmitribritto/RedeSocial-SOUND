<?php
// Desenvolvimento local: se necessário, crie config.local.php com as credenciais.
// Produção: configure DB_HOST, DB_PORT, DB_USER, DB_PASSWORD e DB_NAME na Vercel.
$localConfig = __DIR__ . '/config.local.php';
if (is_file($localConfig)) {
    require $localConfig;
    return;
}

$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbPort = (int) (getenv('DB_PORT') ?: 3306);
$dbUsername = getenv('DB_USER') ?: 'root';
$dbPassword = getenv('DB_PASSWORD') ?: '';
$dbName = getenv('DB_NAME') ?: 'sound-login';

$conexao = @new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno) {
    http_response_code(503);
    exit('Banco de dados indisponível. Verifique as variáveis de ambiente da aplicação.');
}

$conexao->set_charset('utf8mb4');
?>
