<?php
require "header.php"
?>

  <main>
    <h1>Sign-up</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo <p> Fill all fields </p>
        }

      }
     ?>
    <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat Password">
      <button type="submit" name="signup-btn">Signup</button>
    </form>

  </main>

<?php
  require footer.php
?>
