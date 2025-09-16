<?php

if (!empty($_POST)) {

  $errors = [];

  // username
  if (empty($_POST['username'])) {
    $errors['username'] = "Nome de usuário é obrigatório";
  } else if (preg_match("/[^a-zA-Z0-9_]/", $_POST['username'])) {
    $errors['username'] = 'Username can only have letters and no spaces';
  }

  // email
  $query = "select id from users where email = :email limit 1";
  $email = query($query, ['email' => $_POST['email']]);

  if (empty($_POST['email'])) {
    $errors['email'] = "A email is required";
  } else  if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email not valid";
  } else  
  if ($email) {
    $errors['email'] = 'This email is already in use';
  }

  // password

  if (empty($_POST['password'])) {
    $errors['password'] = "A password is required";
  } else  
  if (strlen($_POST['password']) < 6) {
    $errors['password'] = 'Password must be 6 character or more';
  }


  if (empty($errors)) {
    $data = [];
    $data['username'] = $_POST['username'];
    $data['email']    = $_POST['email'];
    $data['role']     = "user";
    $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "insert into users (username,email,password,role) values (:username,:email,:password,:role)";
    query($query, $data);

    redirect('login');
  }
}

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign up - <?= APP_NAME ?></title>
  <link href="<?= ROOT ?>/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      /* background-color: #0e1012 !important; fundo preto */
      color: #dcddde;
      position: relative;
      overflow: hidden;
      font-family: "Segoe UI", Arial, sans-serif;
    }

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background:
        linear-gradient(to bottom, rgba(14, 16, 18, 0.95), rgba(14, 16, 18, 0.85), rgba(14, 16, 18, 0.98)),
        url("<?= ROOT ?>/public/assets/images/demonslayer-slide-1.jpg") center/cover no-repeat;
      opacity: 1;
      z-index: -1;
    }

    .form-signin {
      max-width: 440px;
      padding: 1.5rem;
      margin: auto;
    }

    @media(max-width: 768px) {
      .form-signin {
        background-color: transparent;
      }
    }

    .form-signin h1 {
      color: #fff;
    }

    .form-floating label {
      color: #aaa;
    }

    .form-control {
      background-color: #13141bd8 !important;
      border: 1px solid #545454ff;
      color: #dcddde;
    }

    .form-control:focus {
      background-color: #2f3136;
      border-color: #5865f2;
      color: #fff;
      box-shadow: 0 0 0 0.25rem rgba(88, 101, 242, 0.25);
    }

    .btn-primary {
      background-color: #5865f2;
      border-color: #5865f2;
      font-weight: 600;
    }

    .btn-primary:hover {
      background-color: #4752c4;
      border-color: #4752c4;
    }

    a {
      color: #00aff4;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .footer-text {
      color: #72767d;
    }
  </style>
</head>

<body class="d-flex align-items-center py-4">
  <main class="form-signin w-100">
    <form method="post">
      <p class="text-center mb-3">Demon Slayer - Blog (PHP + MySQL)</p>
      <h1 class="h3 mb-3 fw-normal text-center">Criar conta</h1>

      <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
          Please fix the errors below
          <ul class="mb-0">
            <?php foreach ($errors as $error) : ?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>


      <div class="form-floating my-2">
        <input
          value="<?=old_value('username')?>"
          type="text"
          class="form-control"
          id="username"
          name="username"
          placeholder="Your name" />
        <label for="username">Nome de usuário</label>
      </div>

      <div class="form-floating my-2">
        <input
          value="<?=old_value('email')?>"
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="name@example.com" />
        <label for="email">Email</label>
      </div>

      <div class="form-floating my-2">
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
          placeholder="Password" />
        <label for="password">Senha</label>
      </div>

      <div class="my-4 text-center">
        Já tem uma conta? <a href="<?= ROOT ?>/app/pages/login">Faça login</a>
      </div>

      <button class="btn btn-primary w-100 py-2 cursor-pointer my-2" type="submit">
        Criar
      </button>
      <a href="<?= ROOT ?>/app/pages/" class="btn p-0 border w-100 py-2 my-2" type="button">
        Entrar como convidado
      </a>
      <p class="mt-4 mb-0 text-center footer-text">&copy; <?php echo date("Y") ?></p>
    </form>
  </main>

  <!-- Bootstrap JS -->
  <script src="<?= ROOT ?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>