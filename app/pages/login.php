<?php

if (!empty($_POST)) {

  $errors = [];

  $query = "select * from users where email = :email limit 1";
  $row = query($query, ['email' => $_POST['email']]);

  if ($row) {
    $data = [];

    if (password_verify($_POST['password'], $row[0]['password'])) {
      authenticate($row[0]);
      header("Location: " . ROOT . "/app/pages/admin");
      exit;
    } else {
      $errors['email'] = 'Email ou senha incorretos';
    }
  } else {
    $errors['email'] = 'Email ou senha incorretos';
  }
}


?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - <?= APP_NAME ?></title>
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
      <h1 class="h3 mb-3 fw-normal text-center">Bem vindo de volta!</h1>

      <?php if (!empty($errors['email'])) : ?>
        <div class="alert alert-danger">
          Por favor, corrija os erros
          <ul class="mb-0">
            <?php foreach ($errors as $error) : ?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

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
          value="<?=old_value('password')?>"
          type="password"
          class="form-control"
          id="password"
          name="password"
          placeholder="Password" />
        <label for="password">Senha</label>
      </div>

      <div class="my-4 text-center">
        Não tem uma conta? <a href="<?= ROOT ?>/app/pages/signup">Se cadastre aqui</a>
      </div>

      <button class="btn btn-primary w-100 py-2 cursor-pointer my-2" type="submit">
        Entrar
      </button>
      <p class="mt-4 mb-0 text-center footer-text">&copy; <?php echo date("Y") ?></p>
    </form>
  </main>

  <script src="<?= ROOT ?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>