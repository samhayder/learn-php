<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Discuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./">Home</a>
        <a class="nav-link" href="#">Category</a>
        <a class="nav-link" href="#">Latest Question</a>
        <a class="nav-link" href="#"></a>
        <?php
if (!$_SESSION["user"]) {?>
          <a class="nav-link" href="">Logout</a>
        <?php }
?>

        <?php
if ($_SESSION["user"]) {?>
          <a class="nav-link" href="?signup=true">Signup</a>
          <a class="nav-link" href="?login=true">Login</a>
        <?php }
?>

      </div>
    </div>
  </div>
</nav>