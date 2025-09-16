# 📰 Demon Slayer Blog - PHP + MySQL

Este é um projeto de blog simples inspirado no anime *Demon Slayer*, desenvolvido em PHP puro com MySQL. Este projeto visa praticar conceitos fundamentais de back-end como autenticação, rotas básicas e conexão com banco de dados.

---

<img width="3161" height="1491" alt="image" src="https://github.com/user-attachments/assets/d0e58971-2866-4561-82f4-10d13d35cceb" />
<img width="3200" height="1468" alt="image" src="https://github.com/user-attachments/assets/6d7684f4-c0e7-4109-ad7f-a7d8c3698d14" />
<img width="3200" height="1496" alt="image" src="https://github.com/user-attachments/assets/ce79884a-1a52-4b83-a9cc-dde0693698b4" />
(DASHBOARD/ADMIN em andamento)


## ✅ Funcionalidades Implementadas (até agora)

- [x] Sistema de Registro de Usuários
- [x] Login de Usuário com hash de senha (via `password_hash` e `password_verify`)
- [x] Logout de sessão
- [x] Validação de formulário (cliente e servidor)
- [x] Armazenamento seguro de senhas
- [x] Sistema de sessões para manter usuários logados
- [x] Redirecionamento baseado em autenticação

---

## 🛠️ Tecnologias Utilizadas

- PHP (sem frameworks)
- MySQL
- HTML/CSS
- Bootstrap 5 (tema escuro)
- XAMPP (Ambiente de desenvolvimento local)

---

## 📁 Estrutura de Pastas

<pre>
blog-app/
├── app/
│ ├── core/
│ │ ├── config.php
│ │ ├── connection.php
│ │ ├── functions.php
│ │ └── init.php
│ ├── pages/
│ │ ├── login.php
│ │ ├── signup.php
│ │ ├── logout.php
│ │ └── admin.php
│
├── public/
│ └── assets/
│ └── bootstrap/
│ └── images/
│
└── index.php
</pre>

---

## 📦 Como Rodar Localmente

1. **Clone o repositório** (ou baixe o ZIP):
   ```bash
   git clone https://github.com/seu-usuario/blog-app.git

2. **Coloque o projeto na pasta do XAMPP** (certifique-se de ter XAMPP baixado e com MySQL + APACHE rodando):
- Caminho: C:\xampp\htdocs\blog-app

3. **Crie o banco de dados no MySQL**:
- Nome do banco: myblog_db
- Execute o script de criação de tabelas (você pode usar a função create_tables() do arquivo functions.php para isso).

4. **Configure o banco (se necessário):**
No arquivo config.php:
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "myblog_db");
define('DBHOST', 'localhost');

5. **Inicie o servidor local:**
acesse:
http://localhost/blog-app/

👥 Registro e Login
- Página de registro: /app/pages/signup
- Página de login: /app/pages/login
- Após login, usuário é redirecionado para: /app/pages/admin

🔐 Sessões e Autenticação

- O sistema usa session_start() para controlar sessões.
- As senhas são criptografadas com password_hash().
- A verificação de senha usa password_verify().

📌 Próximos Passos
 Sistema de categorias
 Upload de imagens para posts
 CRUD de postagens
 Interface de admin completa
 Comentários
 Controle de usuários


 Projeto adaptado e desenvolvido por Erick Rodrigues
