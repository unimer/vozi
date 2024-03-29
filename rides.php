<?php require "header.php" ?>

<body>
        <section class="containter form-group">
          <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="search-content">

                  <form action="includes/list-rides.inc.php" method="post" novalidate autocomplete="off" class="idealforms searchtours">

                      <div class="row">

                          <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="field">
                                  <select  name="startlocation">
                                      <option input type="text" selected hidden value="">Od</option>
                                      <option >Banja Luka</option>
                                      <option >Bihac</option>
                                      <option >Bijeljina</option>
                                      <option >Bileća</option>
                                      <option >Brcko</option>
                                      <option >Bugojno</option>
                                      <option >Cazin</option>
                                      <option >Čaopljina</option>
                                      <option >Čelinac</option>
                                      <option >Doboj</option>
                                      <option >Donji Vakuf</option>
                                      <option >Drvar</option>
                                      <option >Derventa</option>
                                      <option >Foča</option>
                                      <option >Fojnica</option>
                                      <option >Gacko</option>
                                      <option >Glamoč</option>
                                      <option >Goražde</option>
                                      <option >Jablanica</option>
                                      <option >Jajce</option>
                                      <option >Kljuc</option>
                                      <option >Kotor-Varoš</option>
                                      <option >Kupres</option>
                                      <option >Laktaši</option>
                                      <option >Modriča</option>
                                      <option >Mrkonjić Grad</option>
                                      <option >Mostar</option>
                                      <option >Neum</option>
                                      <option >Nevesinje</option>
                                      <option >Pale</option>
                                      <option >Prijedor</option>
                                      <option >Prnjavor</option>
                                      <option >Sanski Most</option>
                                      <option >Sarajevo</option>
                                      <option >Stolac</option>
                                      <option >Teslić</option>
                                      <option >Travnik</option>
                                      <option >Tuzla</option>
                                      <option >Trebinje</option>
                                      <option >Višegrad</option>
                                      <option >Zenica</option>
                                      <option >Zvornik</option>

                                  </select>
                              </div>
                          </div>

                          <div class="col-md-3 col-sm-3 col-xs-12">

                              <div class="field">
                                  <select  name="endlocation">

                                      <option input type="text" selected hidden value="">Do</option>
                                      <option >Banja Luka</option>
                                      <option >Bihac</option>
                                      <option >Bijeljina</option>
                                      <option >Bileća</option>
                                      <option >Brcko</option>
                                      <option >Bugojno</option>
                                      <option >Cazin</option>
                                      <option >Čaopljina</option>
                                      <option >Čelinac</option>
                                      <option >Doboj</option>
                                      <option >Donji Vakuf</option>
                                      <option >Drvar</option>
                                      <option >Derventa</option>
                                      <option >Foča</option>
                                      <option >Fojnica</option>
                                      <option >Gacko</option>
                                      <option >Glamoč</option>
                                      <option >Goražde</option>
                                      <option >Jablanica</option>
                                      <option >Jajce</option>
                                      <option >Kljuc</option>
                                      <option >Kotor-Varoš</option>
                                      <option >Kupres</option>
                                      <option >Laktaši</option>
                                      <option >Modriča</option>
                                      <option >Mrkonjić Grad</option>
                                      <option >Mostar</option>
                                      <option >Neum</option>
                                      <option >Nevesinje</option>
                                      <option >Pale</option>
                                      <option >Prijedor</option>
                                      <option >Prnjavor</option>
                                      <option >Sanski Most</option>
                                      <option >Sarajevo</option>
                                      <option >Stolac</option>
                                      <option >Teslić</option>
                                      <option >Travnik</option>
                                      <option >Tuzla</option>
                                      <option >Trebinje</option>
                                      <option >Višegrad</option>
                                      <option >Zenica</option>
                                      <option >Zvornik</option>
                                  </select>
                              </div>

                          </div>

                          <div class="col-md-3 col-sm-3 col-xs-12">

                              <div class="field">
                                  <input name="datum" type="text" placeholder="Datum" class="datepicker">
                              </div>


                          </div>

                          <!-- <div class="col-md-3 col-sm-3 col-xs-12">

                              <div class="field">
                                  <select  name="seats">
                                      <option selected hidden value="">Broj mjesta</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                  </select>
                              </div>

                          </div> -->


                          <div class="col-md-3 col-sm-3 col-xs-12">

                              <div class="field buttons">
                                  <button id="button_1" type="submit" class="btn btn-lg green-color" name="search-btn">Trazi</button>
                              </div>

                          </div>

                      </div>


                  </form>
              </div><!-- end .search-content -->

          </div><!-- end .col-sm-12 -->
        </section> <!--end section search menu-->


        <div id="rides">
          <?php require "offered-rides.php" ?>
        </div>


        <?php require "footer.php" ?>



        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
