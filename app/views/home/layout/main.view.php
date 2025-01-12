<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PiruUI | Home</title>
  <!-- Css Bootstrap-->
  <!-- <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/bootstrapicons.css">
  <link rel="stylesheet" href="css/custom.css"> -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/piruui.css">
  <script>
    (function () {
      const storedTheme = localStorage.getItem('theme');
      const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
      const theme = storedTheme || (prefersDarkScheme ? 'dark' : 'light');
      document.documentElement.setAttribute('data-bs-theme', theme);
    })();

  </script>
  <!-- <script src="js/liteyoutube.js"> </script> -->
</head>

<body>
  <div class="navbar navbar-expand-lg fixed-top bg-body" data-bs-theme="dark">
    <div class="container"><a class="navbar-brand" href="../">PiruUI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-md-auto">
          <li class="nav-item" data-bs-theme="light">
            <a class="nav-link">v5.3</a>
          </li>
          <li class="nav-item">
            <button class="nav-link py-2 d-flex align-items-center" id="bd-theme-toggle" type="button">
              <!-- <span class="theme-icon-active" id="bd-theme-icon"> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="theme-icon-active" id="bd-theme-icon">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
              </svg>
              <!-- </span> -->
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:3.3rem">
    <a href="/login">Login</a>
    <?php $template->block("Content"); ?>
  </div>


  <script src="<?= BASE_URL ?>assets/js/piruui.js"></script>
</body>

</html>