<?php require "header.php" ?>
<body>
  <section class="main-content">
    <div class="container">
      <form action="includes/login.inc.php" method="post">
        <div class="col-md-5 col-sm-5 col-xs-5">
          <!-- space -->
        </div>
        <div class="col-xs-2">
          <h2>Prijava</h2>

            <div class="form-group">
              <label>Korisničko ime/Email:</label>
              <input type="text" class="form-control" placeholder="" name="mailuid">
            </div>

            <div class="form-group">
              <label>Šifra:</label>
              <input type="password" class="form-control" placeholder="" name="pwd">
            </div>
            <button type="submit" class="btn btn-success" name='login-submit'>Prijava</button>
            <div class="label">
                <a href="signup.form.php">Registracija</a>
            </div>
          </div>


      </form>
    </div>

  </section>
</body>

</html>
