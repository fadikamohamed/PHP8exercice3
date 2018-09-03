<?php
if (!empty($_POST['login'])) {
  setCookie('login', $_POST['login'], time() + 800, null, null, false, true);
}
if (!empty($_POST['password'])) {
  setCookie('password', $_POST['password'], time() + 800, null, null, false, true);
}
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <title>Exercice 3</title>
  </head>
  <body>
      <div class="container">
          <div class="text-center bg-dark text-white">
    <p>
      <?php
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
          echo $_COOKIE['login']. ' ' . $_COOKIE['password'];
        }
       ?>
    </p>
    <form action="index.php" method="post">
        <div class="form-group">
      <label for="login">Pseudo : </label><input type="text" name="login" >
        </div>
        <div class="form-group">
      <label for="password">Mot de passe : </label><input type="password" name="password">
        </div>
        <div class="form-group">
      <input class="btn btn-secondary" type="submit" name="submit" value="Valider">
        </div>
    </form>
          </div>
      </div>
  </body>
</html>
