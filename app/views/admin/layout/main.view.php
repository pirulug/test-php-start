<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

  <!-- Primary Meta Tags-->
  <title>Dashboard | PiruAdmin</title>

  <!-- Favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL ?>assets/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>assets/img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>assets/img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="<?= BASE_URL ?>assets/img/favicon/site.webmanifest" />
  <!-- Css Bootstrap-->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/fontawesome.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/piruadmin.css" />
  <script>
    (function () {
      const storedTheme = localStorage.getItem("theme");
      const prefersDarkScheme = window.matchMedia(
        "(prefers-color-scheme: dark)",
      ).matches;
      const theme = storedTheme || (prefersDarkScheme ? "dark" : "light");
      document.documentElement.setAttribute("data-bs-theme", theme);
    })();
  </script>

  <?php $template->block("Styles"); ?>
</head>

<body>

  <div class="wrapper">
    <nav class="sidebar js-sidebar" id="sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html"><span class="sidebar-brand-text align-middle">PiruAdmin</span></a>
        <ul class="sidebar-nav">
          <li class="sidebar-item active">
            <a class="sidebar-link" href="dashboard.html"><i class="align-middle" data-feather="sliders"></i><span
                class="align-middle">Dashboard</span></a>
          </li>
          <li class="sidebar-header">Pages</li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="file"></i><span class="align-middle">Pages</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="pages" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="pages-settings.html">Settings</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="pages-blank.html">Blank Page</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="users"></i><span class="align-middle">Auth</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="auth" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="auth-sign-in.html">Sign In</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="auth-sign-up.html">Sign Up</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="auth-reset-password.html">Reset Password</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="auth-recover-password.html">Recover Password</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#account" data-bs-toggle="collapse"><i
                class="align-middle" data-feather="user"></i><span class="align-middle">Account</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="account" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="account-profile.html">Profile</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#errors" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="coffee"></i><span class="align-middle">Errors</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="errors" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="error-404.html">404</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="error-500.html">500</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-header">Tools &amp; Components</li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#ui-elements" data-bs-toggle="collapse"><i
                class="align-middle" data-feather="users"></i><span class="align-middle">UI Elements</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="ui-elements" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">Buttons</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">Cards</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-general.html">General UI</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-images.html">Images</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-tabs.html">Tabs</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ui-avatar.html">Avatar</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#tables" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="grid"></i><span class="align-middle">Tables</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="tables" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-bootstrap.html">Table Bootstrap</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#forms" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="file"></i><span class="align-middle">Forms</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="forms" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="forms-tagify.html">Tagify</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link collapsed" data-bs-target="#icons" data-bs-toggle="collapse"><i class="align-middle"
                data-feather="coffee"></i><span class="align-middle">Icons</span></a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="icons" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">Feather</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="icons-awesome.html">Font Awesome</a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="icons-bootstrap.html">Bootstrap Icons</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-header">Plugins &amp; Addons</li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="charts-chartjs.html"><i class="align-middle"
                data-feather="bar-chart-2"></i><span class="align-middle">Charts</span></a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="maps-google.html"><i class="align-middle" data-feather="map"></i><span
                class="align-middle">Maps</span></a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="sweetalert.html"><i class="align-middle" data-feather="bell"></i><span
                class="align-middle">SweetAlert 2</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="main">
      <!-- NavBar-->
      <nav class="navtop">
        <a class="sidebar-toggle js-sidebar-toggle"><i class="hamburger align-self-center"></i></a>
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="bd-theme" type="button" aria-expanded="false"
                data-bs-toggle="dropdown" aria-label="Toggle theme (auto)"><span class="theme-icon-active"
                  id="bd-theme-icon"><i class="fa fa-sun"></i></span><span class="visually-hidden"
                  id="bd-theme-text">Toggle theme</span></a>
              <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light"
                    aria-pressed="false">
                    <i class="fa fa-sun opacity-50 me-2"></i>Light<i class="pr-check fa fa-check ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <i class="fa fa-moon opacity-50 me-2"></i>Dark<i class="pr-check fa fa-check ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <i class="fa fa-circle-half-stroke opacity-50 me-2"></i>Auto<i
                      class="pr-check fa fa-check ms-auto d-none"></i>
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" id="alertsDropdown" href="#" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="bell"></i><span class="indicator">4</span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">4 New Notifications</div>
                <div class="list-group">
                  <a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-danger" data-feather="alert-circle"></i>
                      </div>
                      <div class="col-10">
                        <div>Update completed</div>
                        <div class="text-muted small mt-1">
                          Restart server 12 to complete the update.
                        </div>
                        <div class="text-muted small mt-1">30m ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-warning" data-feather="bell"></i>
                      </div>
                      <div class="col-10">
                        <div>Lorem ipsum</div>
                        <div class="text-muted small mt-1">
                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                        </div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-primary" data-feather="home"></i>
                      </div>
                      <div class="col-10">
                        <div>Login from 192.186.1.8</div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <i class="text-success" data-feather="user-plus"></i>
                      </div>
                      <div class="col-10">
                        <div>New connection</div>
                        <div class="text-muted small mt-1">
                          Christina accepted your request.
                        </div>
                        <div class="text-muted small mt-1">14h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="text-muted" href="#">Show all notifications</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" id="messagesDropdown" href="#" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="message-square"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                <div class="dropdown-menu-header">
                  <div class="position-relative">4 New Messages</div>
                </div>
                <div class="list-group">
                  <a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img class="avatar img-fluid rounded-circle" src="https://dummyimage.com/50x50/d63384/fff.jpg"
                          alt="Vanessa Tucker" />
                      </div>
                      <div class="col-10 ps-2">
                        <div>Vanessa Tucker</div>
                        <div class="text-muted small mt-1">
                          Nam pretium turpis et arcu. Duis arcu tortor.
                        </div>
                        <div class="text-muted small mt-1">15m ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img class="avatar img-fluid rounded-circle" src="https://dummyimage.com/50x50/d63384/fff.jpg"
                          alt="William Harris" />
                      </div>
                      <div class="col-10 ps-2">
                        <div>William Harris</div>
                        <div class="text-muted small mt-1">
                          Curabitur ligula sapien euismod vitae.
                        </div>
                        <div class="text-muted small mt-1">2h ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img class="avatar img-fluid rounded-circle" src="https://dummyimage.com/50x50/d63384/fff.jpg"
                          alt="Christina Mason" />
                      </div>
                      <div class="col-10 ps-2">
                        <div>Christina Mason</div>
                        <div class="text-muted small mt-1">
                          Pellentesque auctor neque nec urna.
                        </div>
                        <div class="text-muted small mt-1">4h ago</div>
                      </div>
                    </div>
                  </a><a class="list-group-item" href="#">
                    <div class="row g-0 align-items-center">
                      <div class="col-2">
                        <img class="avatar img-fluid rounded-circle" src="https://dummyimage.com/50x50/d63384/fff.jpg"
                          alt="Sharon Lessman" />
                      </div>
                      <div class="col-10 ps-2">
                        <div>Sharon Lessman</div>
                        <div class="text-muted small mt-1">
                          Aenean tellus metus, bibendum sed, posuere ac,
                          mattis non.
                        </div>
                        <div class="text-muted small mt-1">5h ago</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="text-muted" href="#">Show all messages</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle d-inline-block" href="#" data-bs-toggle="dropdown">
                <div class="avatar avatar-sm me-1">
                  <img src="https://dummyimage.com/50x50/ececec/000.jpg" alt="" />
                </div>
                <span class="d-none d-sm-inline-block">Pirulug</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i>
                  Profile</a><a class="dropdown-item" href="#"><i class="align-middle me-1"
                    data-feather="pie-chart"></i>
                  Analytics</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                    data-feather="settings"></i>
                  Settings &amp; Privacy</a><a class="dropdown-item" href="#"><i class="align-middle me-1"
                    data-feather="help-circle"></i>
                  Help Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="align-middle me-1" data-feather="log-out"></i>Log
                  out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Content-->
      <div class="content">
        <div class="mb-3">
          <h1 class="h3 d-inline align-middle"><?= $title ?></h1>
        </div>
        <?= $message ?? "" ?>
        <?php $template->block("Content"); ?>
      </div>
      <!-- Footer-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="index.html">
                  &copy;&nbsp;<strong>PiruAdmin&nbsp;</strong></a>All Right Reserved.
              </p>
            </div>
            <div class="col-6 text-end">
              <p class="mb-0">
                Designed By&nbsp;<a class="text-muted" href="http://github.com/pirulug" target="_blank">Pirulug</a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="<?= BASE_URL ?>assets/js/feathericons.js"></script>
  <script src="<?= BASE_URL ?>assets/js/piruadmin.js"></script>
  <script src="<?= BASE_URL ?>assets/js/chartjs.js"></script>

  <?php $template->block("Scripts"); ?>
</body>

</html>