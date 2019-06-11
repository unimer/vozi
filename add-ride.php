<?php require "header.php"; ?>


<body>

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="search-content">

                <form action="includes/insert-ride.php" method="post" novalidate autocomplete="off" class="idealforms searchtours" >

                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-xs-12" >
                            <div class="field ">
                                <select  name="startlocation" required>
                                    <option input type="text" selected hidden value="">Od</option>
<<<<<<< HEAD

                                      <option >Banja Luka</option>
                                      <option>Bihac</option>
                                      <option >Bijeljina</option>
                                      <option>Bileća</option>
                                      <option >Brcko</option>
                                      <option>Bugojno</option>
=======
                          
                                      <option >Banja Luka</option>
                                      <option >Bihac</option>
                                      <option >Bijeljina</option>
                                      <option >Bileća</option>
                                      <option >Brcko</option>
                                      <option >Bugojno</option>
>>>>>>> 2246357dee89dbbe76912cdad2e7c38dc2f6d0d6
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
<<<<<<< HEAD
                                      <option value="Banja Luka">Banja Luka</option>
                                      <option value="Bihać">Bihac</option>
                                      <option value="Bijeljina">Bijeljina</option>
                                      <option value="Bileća">Bileća</option>
                                      <option value="Brcko">Brcko</option>
                                      <option value="Bugojno">Bugojno</option>
                                      <option value="Cazin">Cazin</option>
                                      <option value="Čapljina">Čaopljina</option>
                                      <option value="Čelinac">Čelinac</option>
=======
                                      <option >Banja Luka</option>
                                      <option >Bihac</option>
                                      <option >Bijeljina</option>
                                      <option >Bileća</option>
                                      <option >Brcko</option>
                                      <option >Bugojno</option>
                                      <option >Cazin</option>
                                      <option >Čaopljina</option>
                                      <option >Čelinac</option>
>>>>>>> 2246357dee89dbbe76912cdad2e7c38dc2f6d0d6
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

                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="field">
                            <input type="text" id="demo1" value ="10:00" name=timee>
                            <script type="text/javascript">
                              $('#demo1').chungTimePicker();
                              </script>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">

                            <div class="field">
                                <select  name="seats">
                                    <option selected hidden value="">Broj mesta</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>

                        <<div class="col-md-3 col-sm-3 col-xs-12">

                        <div class="field">
<<<<<<< HEAD
                            <select  name="price" placeholder="Cijena">
                            <?php
                                echo "<option> Cijena </option>";
                                for($i=1; $i<=100; $i++)
                                {
                                    echo "<option value=".$i.">".$i." KM  </option>";
=======
                            <select  name="price" >
                            <?php 
                                for($i=1; $i<=100; $i++)
                                {
                                    
                                    echo "<option option value=".$i.">".$i." KM  </option>";
>>>>>>> 2246357dee89dbbe76912cdad2e7c38dc2f6d0d6
                                }
                                ?>

                                </select>
                        </div>

                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">

                        <textarea name='description' placeholder="Dodatni uslovi ili opis prevoza" rows="1." cols="20"></textarea>




                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">

                            <div class="field buttons">
                                <button type="submit" class="btn btn-lg green-color" name="insert-ride">Dodaj</button>
                            </div>

                        </div>


                    </div>



                </form>
            </div><!-- end .search-content -->

        </div><!-- end .col-sm-12 -->


        <?php require "offered-rides.php" ?>
        <?php require "footer.php" ?>



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
