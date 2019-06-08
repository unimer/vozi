<?php require "header.php" ?>
<body>
        <section class="containter form-group">
          <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="search-content">

                  <form action="getrides.php" method="post" novalidate autocomplete="off" class="idealforms searchtours" >

                      <div class="row">

                          <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="field">
                                  <select  name="startlocation">
                                      <option input type="text" selected hidden value="">Od</option>
                                      <option value="banjaluka">Banja Luka</option>
                                      <option value="sarajevo">Sarajevo</option>
                                      <option value="bihac">Bihac</option>
                                      <option value="brcko">Brcko</option>
                                      <option value="mostar">Mostar</option>
                                      <option value="tuzla">Tuzla</option>
                                      <option value="trebinje">Trebinje</option>
                                      <option vlaue="prijedor">Prijedor</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-md-3 col-sm-3 col-xs-12">

                              <div class="field">
                                  <select  name="endlocation">
                                      <option selected hidden value="">Do</option>
                                      <option>Banja Luka</option>
                                      <option>Sarajevo</option>
                                      <option>Bihac</option>
                                      <option>Brcko</option>
                                      <option>Mostar</option>
                                      <option>Tuzla</option>
                                      <option>Trebinje</option>
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
                                  <button type="submit" class="btn btn-lg green-color">Trazi</button>
                              </div>

                          </div>

                      </div>


                  </form>
              </div><!-- end .search-content -->

          </div><!-- end .col-sm-12 -->
        </section> <!--end section search menu-->



        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Ponudjene voznje</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-content">

                            <div class="rides-list">

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">Od Banja Luke do Sarajeva</a></h3>vozi: <a href="#">Milorad Dodik</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                June 20, 2018 at 19:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <!-- <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li> -->

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">Od Brckog do Mostara</a></h3>vozi: <a href="#">Bakir Izetbegovic</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                June 18, 2018 at 06:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                4
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <!--<li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>-->

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">Iz Trebinja do Bihaca</a></h3>vozi: <a href="#">Dragan Covic</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                June 15, 2018 at 20:30 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                3
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <!--<li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>-->

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <!--<article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Barcelona to Madrid</a></h3>ride by <a href="#">Adriana Bello</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 10, 2014 at 09:00 AM
                                            </a>
                                        </li>

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                2
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul>

                                </article>

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Munich to Berlin</a></h3>ride by <a href="#">Albert Becker</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 08, 2014 at 22:00 PM
                                            </a>
                                        </li>

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul>

                                </article> -->

                                <div class="clearfix"></div>

                                <div class="post-pagination pagination-margin clearfix">

                                    <div class="next pull-right">
                                        <a href="#">
                                            Dalje
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>

                                </div><!-- end .post-pagination -->

                            </div><!-- end .events-list -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by MBBB
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpass" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

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