<?php 
    session_start();
    require_once('demo-access.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    setcookie('sound_demo', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    header('Location: login.php');
?>
