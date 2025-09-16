# 📰 Demon Slayer Blog - PHP + MySQL

Este é um projeto de blog simples inspirado no anime *Demon Slayer*, desenvolvido em PHP puro com MySQL. Este projeto visa praticar conceitos fundamentais de back-end como autenticação, rotas básicas e conexão com banco de dados.

---

<img width="3161" height="1491" alt="image" src="https://github.com/user-attachments/assets/d0e58971-2866-4561-82f4-10d13d35cceb" />
<img width="3200" height="1468" alt="image" src="https://github.com/user-attachments/assets/6d7684f4-c0e7-4109-ad7f-a7d8c3698d14" />
<img width="2356" height="1271" alt="image" src="https://github.com/user-attachments/assets/4cb54b42-2b31-4778-b326-ceb0800b9292" />
<img width="3165" height="1481" alt="image" src="https://github.com/user-attachments/assets/d6b3d035-8a99-430b-bbc0-c1a319ba9137" />
(ADMIN e DETAILED_PAGE em andamento)

https://github.com/user-attachments/assets/933154c2-06c1-4933-b4c3-8af1953b0bfc





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

- PHP (puro)
- MySQL
- HTML/CSS
- Bootstrap 5
- XAMPP (localhost)

---

## 📁 Estrutura de Pastas (muito simplificado)

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
│ │ ├── 404.php
│ │ ├── index.php
│ │ ├── home.php
│ │ ├── blog.php
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
