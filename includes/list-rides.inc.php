<?php
  require "dbh.inc.php";
session_start();
$startpoint=$_POST ["startlocation"];
$endpoint =$_POST ["endlocation"];
$dateRides =$_POST ["datum"];
$seats =$_POST ["seats"];


function print_rides($data){
  while ($all = mysqli_fetch_assoc($data)) {


                            echo "<article class=\"ride-box clearfix\">";

                                echo "<div class=\"ride-content\">";
                                    echo "<h3><a href=\"#\">".$all[startpoint]."-".$all[endpoint]."</a></h3>vozi: <a href=\"#\">".$all[usernameRides]."</a>";
                                echo "</div>";

                                echo "<ul class=\"ride-meta\">";

                                    echo "<li class=\"ride-date\">";
                                        echo "<a class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">";
                                            //echo "<i class=\"fa fa-calendar\"></i>";
                                            echo $all[dateRides];

                                        echo "</a>";
                                    echo "</li>"; //<!-- end .ride-date -->

                                    echo "<li class=\"ride-times\">";
                                      echo "<a class=\"tooltip-link\" data-original-title=\"Date\" data-doggle=\"tooltip\">";
                                        echo $all[timeRides];
                                      echo "</a>";
                                    echo "</li>";

                                    echo "<li class=\"ride-people\">";
                                        echo "<a class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">";
                                          //  echo "<i class=\"fa fa-user\"></i>";
                                          if ($all[seats] == 1) {
                                            echo $all[seats]. "     Mjesto";
                                          }
                                          else{
                                            echo $all[seats]."      Mjesta ";
                                          }

                                        echo "</a>";
                                    echo "</li>"; //"<!-- end .ride-people -->

                                    echo "<li class=\"ride-times\">";
                                      echo "<a class=\"tooltip-link\" data-original-title=\"Date\" data-doggle=\"tooltip\">";
                                        echo $all[cost]. " KM";
                                      echo "</a>";
                                    echo "</li>";

                                echo "</ul>"; //"<!-- end .ride-meta -->

                            echo "</article>"; //"<!-- end .ride-box -->
                    }

}




if(isset($_GET['search'])){
  $sql = "SELECT * FROM rides WHERE startpoint='".$_SESSION['startpoint']."' AND endpoint = '".$_SESSION['endpoint']."' AND dateRides ='".$_SESSION['dateRides']."'";
  $results=mysqli_query($conn,$sql);

  print_rides($results);

}


if(isset($_POST['search-btn'])){


  $_SESSION['startpoint'] = $startpoint;
  $_SESSION['endpoint'] = $endpoint;
  $_SESSION['dateRides'] = $dateRides;


  header("Refresh:0 ../rides.php?search=query#rides");

}
else if (!$_GET['search']){
  $sql = "SELECT * FROM rides";

  $results=mysqli_query($conn,$sql);

  print_rides($results);

}
