<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - <?=APP_NAME?></title>

  <!-- Bootstrap -->
   <link href="<?=ROOT?>/public/assets/css/home.css" rel="stylesheet">
  <link href="<?=ROOT?>/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ROOT?>/public/assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=ROOT?>/public/assets/css/headers.css" rel="stylesheet">
  <link href="<?=ROOT?>/public/assets/slider/ism/css/my-slider.css" rel="stylesheet">

  <style>
    
    .bd-placeholder-img {
      font-size: 1.125rem;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header class="p-3 border-bottom">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
      <ul class="nav me-auto">
        <li><a href="#" class="nav-link px-2 link-secondary">Início</a></li>
        <li><a href="#" class="nav-link px-2">Blog</a></li>
        <li><a href="#" class="nav-link px-2">Contato</a></li>
      </ul>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Procurar por..." aria-label="Search">
      </form>
      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
          <!-- Futuramente colocar a foto do usuário logado -->
          <img src="https://github.com/Seila-dev.png" alt="profile" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="<?=ROOT?>/app/pages/admin">Admin</a></li>
          <li><a class="dropdown-item" href="<?=ROOT?>/app/pages/profile">Perfil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?=ROOT?>/app/pages/logout">Sair</a></li>
        </ul>
      </div>
    </div>
  </header>

  <!-- SLIDER -->
  <main class="container my-4">
    <div class="ism-slider" data-transition_type="fade" data-play_type="loop" id="my-slider">
      <ol>
        <li>
          <img src="<?=ROOT?>/public/assets/slider/ism/image/slides/_u/1757770836107_691041.jpg">
          <div class="ism-caption">LANÇAMENTO! DEMON SLAYER: CASTELO INFINITO - Dia 11 de Setembro nos cinemas.</div>
        </li>
        <li>
          <img src="<?=ROOT?>/public/assets/slider/ism/image/slides/_u/1757770776050_275434.webp">
          <div class="ism-caption">Rumores sobre a quinta temporada de Demon Slayer...</div>
        </li>
        <li>
          <img src="<?=ROOT?>/public/assets/slider/ism/image/slides/_u/1757770691773_709343.jpg">
          <div class="ism-caption">Crunchyroll lança trailer e aumenta a expectativa dos fãs!</div>
        </li>
        <li>
          <img src="<?=ROOT?>/public/assets/slider/ism/image/slides/_u/1757770586243_822503.jpg">
        </li>
      </ol>
    </div>

    <!-- POSTS -->
    <h1 class="mt-5 mb-3">Destaques</h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <span class="badge text-bg-primary">Recente</span>
            <h3 class="card-title mt-2">LANÇAMENTO! DEMON SLAYER: CASTELO INFINITO - Dia 11 de Setembro nos cinemas.</h3>
            <small class="text-body-secondary">Set 11</small>
            <p class="card-text mt-2">Sessões abertas para o filme demon slayer! O tão esperado filme acaba de...</p>
            <a href="#" class="stretched-link">Continue lendo</a>
          </div>
          <img src="<?=ROOT?>/public/assets/images/demonslayer-slide-1.jpg"
               class="card-img-bottom" alt="Featured image" style="height:300px; object-fit:cover;">
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <span class="badge text-bg-success">Design</span>
            <h3 class="card-title mt-2">Post title</h3>
            <small class="text-body-secondary">Nov 11</small>
            <p class="card-text mt-2">Mais um post interessante com conteúdo atualizado.</p>
            <a href="#" class="stretched-link">Continue lendo</a>
          </div>
          <img src="<?=ROOT?>/public/assets/images/demonslayer-slide-2.jpg"
               class="card-img-bottom" alt="Design image" style="height:300px; object-fit:cover;">
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Links</h5>
          <ul class="nav flex-column">
            <li><a href="#" class="nav-link p-0 text-body-secondary">Início</a></li>
            <li><a href="#" class="nav-link p-0 text-body-secondary">Login</a></li>
            <li><a href="#" class="nav-link p-0 text-body-secondary">Blog</a></li>
            <li><a href="#" class="nav-link p-0 text-body-secondary">Contato</a></li>
          </ul>
        </div>
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Assine nossa newsletter</h5>
            <p>Receba novidades e atualizações mensais.</p>
            <div class="d-flex gap-2">
              <input type="email" class="form-control" placeholder="Seu e-mail" required>
              <button class="btn btn-primary" type="submit">Inscrever</button>
            </div>
          </form>
        </div>
      </div>
      <div class="d-flex justify-content-between py-4 border-top">
        <p>&copy; 2025 Demon Slayer Blog. Todos os direitos reservados.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a href="#"><i class="bi bi-instagram fs-4"></i></a></li>
          <li class="ms-3"><a href="#"><i class="bi bi-facebook fs-4"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script src="<?=ROOT?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=ROOT?>/public/assets/slider/ism/js/ism-2.2.min.js"></script>
</body>
</html>
