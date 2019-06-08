<?php
  require "dbh.inc.php";

  $sql = "SELECT * FROM rides";

  $results=mysqli_query($conn,$sql);



while ($all = mysqli_fetch_assoc($results)) {


                          echo "<article class=\"ride-box clearfix\">";

                              echo "<div class=\"ride-content\">";
                                  echo "<h3><a href=\"#\">".$all[startpoint]."-".$all[endpoint]."</a></h3>vozi: <a href=\"#\">implementation needed</a>";
                              echo "</div>";

                              echo "<ul class=\"ride-meta\">";

                                  echo "<li class=\"ride-date\">";
                                      echo "<a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">";
                                          //echo "<i class=\"fa fa-calendar\"></i>";
                                          echo $all[dateRides];

                                      echo "</a>";
                                  echo "</li>"; //<!-- end .ride-date -->

                                  echo "<li class=\"ride-people\">";
                                      echo "<a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">";
                                        //  echo "<i class=\"fa fa-user\"></i>";
                                          echo $all[seats];
                                      echo "</a>";
                                  echo "</li>"; //"<!-- end .ride-people -->

                              echo "</ul>"; //"<!-- end .ride-meta -->

                          echo "</article>"; //"<!-- end .ride-box -->
}
