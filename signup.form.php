<?php require "header.php" ?>

<body>
  <section class="main-content">
    <div class="container">
      <form action="includes/signup.inc.php" method="post">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <!-- space -->
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <h2>Registracija</h2>


            <div class="form-group">
              <label>Korisničko ime:</label>
              <input type="text" class="form-control" placeholder="" name="uid">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="" name="mail">
            </div>
            <div class="form-group">
              <label>Telefon:</label>
              <input type="phone" class="form-control" placeholder="" name="phone">
            </div>
            <div class="form-group">
              <label>Šifra:</label>
              <input type="password" class="form-control" placeholder="" name="pwd">
            </div>
            <div class="form-group">
              <label>Potvrda šifre:</label>
              <input type="password" class="form-control" placeholder="" name="pwd-repeat">
            </div>


            <button type="submit" class="btn btn-success" name='signup-btn'>Pošalji</button>



          </div>


      </form>
    </div>

  </section>
</body>
