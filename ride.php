<?php
  require "header.php";

?>

<div class="container">


  <div class="col-md-2 col-sm-2 col-xs-2">
  </div>

  <div class="col-md-8 col-sm-8 col-xs-8">
    <!-- <h1>Nudim prevoz</h1> -->
    <div class="panel panel-info">
      <div class="panel-heading">Detaljan pregled vožnje</div>
      <div class="container">


        <?php require "includes/ride-details.inc.php"; ?>


    </div>

  </div>
</div>

<?php require "offered-rides.php"; ?>


<?php
  require "footer.php";
?>
