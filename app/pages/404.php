<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?=ROOT?>/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title>404 - Page Not Found</title>

  <style>
    body {
      background-color: #141516ff; 
      color: #dcddde;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      text-align: center;
    }

    .error-container {
      max-width: 600px;
      padding: 2rem;
    }

    h1 {
      font-size: 6rem;
      font-weight: 700;
      color: #5865f2; 
    }

    p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }

    .btn-home {
      background-color: #5865f2;
      border: none;
      color: #fff;
      padding: 0.75rem 1.5rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 8px;
      transition: background 0.2s;
    }

    .btn-home:hover {
      background-color: #4752c4;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <h1>404</h1>
    <p>The page you are looking for doesnt exist.</p>
    <a href="<?=ROOT?>/app/pages/" class="btn-home">
      Back to Home
    </a>
  </div>

  <!-- Bootstrap JS -->
  <script src="<?=ROOT?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
