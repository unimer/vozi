<?php require "header.php"; ?>


<body>

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="search-content">

                <form action="includes/insert-ride.php" method="post" novalidate autocomplete="off" class="idealforms searchtours" >

                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="field">
                                <select  name="startlocation">
                                    <option input type="text" selected hidden value="">Od</option>
                                    <option value="Banja Luka">Banja Luka</option>
                                    <option value="Sarajevo">Sarajevo</option>
                                    <option value="Bihac">Bihac</option>
                                    <option value="Brcko">Brcko</option>
                                    <option value="Mostar">Mostar</option>
                                    <option value="Tuzla">Tuzla</option>
                                    <option value="Trebinje">Trebinje</option>
                                    <option vlaue="Prijedor">Prijedor</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">

                            <div class="field">
                                <select  name="endlocation">
                                    <option selected hidden value="">Do</option>
                                    <option value="Banja Luka">Banja Luka</option>
                                    <option value="Sarajevo">Sarajevo</option>
                                    <option value="Bihac">Bihac</option>
                                    <option value="Brcko">Brcko</option>
                                    <option value="Mostar">Mostar</option>
                                    <option value="Tuzla">Tuzla</option>
                                    <option value="Trebinje">Trebinje</option>
                                    <option vlaue="Prijedor">Prijedor</option>
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
                            <input type="text" id="demo1" value="10:00" name=time/>
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
                                </select>
                            </div>

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
