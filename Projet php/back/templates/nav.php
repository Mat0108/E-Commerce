<link rel="stylesheet" href="styles/main.css" />
<div class= "nav-container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="nav-main container-fluid">
    <a class="navbar-brand" href="/">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (!isset($_SESSION['user'])) { ?>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
          </li>
        <?php } ?>
        <?php if (isset($_SESSION['user'])) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['user']['email']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="mon_compte.php">Votre compte</a></li>
              <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
</div>