# 🎧 SOUND - Plataforma Musical

Este projeto é uma plataforma web desenvolvida em PHP e MySQL com o objetivo de conectar a comunidade musical (artistas, bandas e entusiastas). Ele oferece um sistema completo de gerenciamento de usuários e acesso a funcionalidades exclusivas.

## 🌟 Principais Recursos

* **Autenticação Segura:** Sistema de **Cadastro** (`cadastro.php`) e **Login** (`login.php`) para acesso à plataforma.
* **Área Restrita:** Páginas acessíveis apenas a usuários autenticados (`home.php`, `propostas.php`).
* **CRUD de Usuários:** Funcionalidades de **Edição** (`edit.php`, `saveEdit.php`) e **Exclusão** (`delete.php`) para gerenciamento de dados do usuário (administração).
* **Controle de Sessão:** Gerenciamento de estado do usuário (`sair.php`).

## ⚙️ Configuração Local

Para executar o projeto em seu ambiente local, você precisará de um servidor web que suporte PHP e um banco de dados MySQL (ex: usando XAMPP, WAMP ou MAMP).

### 1. Requisitos

* PHP (versão recomendada: 7.x ou superior)
* MySQL/MariaDB

### 2. Configuração do Banco de Dados

1.  Crie um novo banco de dados (ex: `formulario`).
2.  Crie a tabela `usuarios` com os campos necessários: `id`, `nome`, `email`, `senha`, `data_nasc`.

    > **Recomendação:** Use `VARCHAR(255)` para a senha e armazene **apenas hashes** (`password_hash` do PHP), e não a senha em texto simples.
3.  **Configure a Conexão:** O arquivo `config.php` contém os detalhes de conexão.

    > **Dica de Segurança:** Altere as credenciais no `config.php` para o seu ambiente local.

    ```php
    $dbHost = 'localhost:SUA_PORTA';
    $dbUsername = 'SEU_USUARIO';
    $dbPassword = 'SUA_SENHA';
    $dbName = 'formulario';
    ```

### 3. Acesso

Após configurar o ambiente e o banco de dados, acesse o projeto pelo seu navegador:
* **Página Inicial:** `http://localhost/seu_diretorio_do_projeto/index.php`
* **Login:** `http://localhost/seu_diretorio_do_projeto/login.php`

## 🤝 Contribuição

Sinta-se à vontade para contribuir com melhorias no código, relatar bugs ou sugerir novas funcionalidades.

---
