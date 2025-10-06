# 🍓 Projeto ILP540 – Moranguinho's World

Projeto desenvolvido para a disciplina **ILP540 – Linguagem de Programação** da **FATEC Presidente Prudente**.  
Trata-se de um **site em PHP** com banco de dados MySQL que simula uma pequena **rede social da Moranguinho**, permitindo cadastro, login, edição de perfil e interação.

<img width="1438" height="675" alt="Screenshot at Oct 06 01-42-04" src="https://github.com/user-attachments/assets/038bd299-17a2-4974-9b1d-01da4eac2b04" />
<img width="1439" height="677" alt="Screenshot at Oct 06 01-42-26" src="https://github.com/user-attachments/assets/8b7768ca-9939-47cc-8b42-c89868ad0386" />
<img width="1439" height="677" alt="Screenshot at Oct 06 01-41-15" src="https://github.com/user-attachments/assets/7e3e7459-1118-4264-b109-6ad562177386" />


---

## 🎯 Funcionalidades
- 👤 Cadastro de novos usuários  
- 🔑 Login e autenticação  
- 📋 Área logada com mensagem de boas-vindas  
- ✏️ Alteração de perfil  
- ❌ Exclusão de conta  
- 📄 Página "Sobre" com informações adicionais  
- 🚪 Logout  

---

## 🛠️ Tecnologias utilizadas
- **PHP 8+**  
- **MySQL** (phpMyAdmin para gerenciar o banco)  
- **HTML5 + CSS3 + JavaScript**  
- Servidor local com **MAMP/XAMPP**  

---

## 📂 Estrutura de Arquivos
- `index.php` → página inicial / login  
- `cadastrar.php`, `process_cadastrar.php` → cadastro de usuários  
- `login.php`, `process_login.php` → autenticação  
- `logado.php` → área logada  
- `perfil.php` → exibição e edição de perfil  
- `excluir.php` → exclusão de conta  
- `sobre.php` → informações sobre o site  
- `usuarios.sql` → script para criação da tabela de usuários no banco  

---

## 🚀 Como rodar o projeto

### 1. Requisitos
- Instalar **MAMP** (Mac) ou **XAMPP** (Windows/Linux).  
- Ativar módulos **Apache** e **MySQL**.

### 2. Configurar o banco
1. Acesse o **phpMyAdmin** em `http://localhost:8889/phpmyadmin` (MAMP) ou `http://localhost/phpmyadmin` (XAMPP).  
2. Crie um banco chamado `moranguinhodb`.  
3. Importe o arquivo `usuarios.sql` que está no projeto.  

### 3. Configurar conexão
No arquivo `conecta.php`, ajuste conforme seu ambiente.  
Para **MAMP** (Mac):
```php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moranguinhodb";
$port = 8889;
