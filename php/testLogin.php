<?php 
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Acesso de demonstração para a versão publicada, sem banco de dados.
        if ($email === 'jow@gmail' && $senha === '123')
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
            exit();
        }

        include_once('config.php');

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            exit();
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            if($_SESSION['email'] == 'admin@gmail.com' && $_SESSION['senha'] == 'adm123')
            {
                header('Location: sistema.php');
            } 
            else
            {
                header('Location: home.php');
            }
            exit();
        }
    }
    else
    {
        header('Location: login.php');
        exit();
    }
?>
