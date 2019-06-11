<?php
  require "dbh.inc.php";

$startpoint=$_POST ["startlocation"];
$endpoint =$_POST ["endlocation"];
$dateRides =$_POST ["datum"];
$seats =$_POST ["seats"];


function print_rides($data){
  while ($all = mysqli_fetch_assoc($data)) {

                             echo "<a href=\"#\">";
                            echo "<article class=\"ride-box clearfix\">";
                        
                                echo "<div class=\"ride-content\" >";
                                    echo "<h3>".$all[startpoint]."-".$all[endpoint]."</h3>vozi: ".$all[usernameRides]."";
                                echo "</div>";
                                
                                echo "<ul class=\"ride-meta\">";

                                    echo "<li class=\"ride-date\">";
                                        // echo "<a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">";
                                            //echo "<i class=\"fa fa-calendar\"></i>";
                                            echo $all[dateRides];

                                       
                                    echo "</li>"; //<!-- end .ride-date -->

                                    echo "<li class=\"ride-times\">";
                                      echo "<class=\"tooltip-link\" data-original-title=\"Date\" data-doggle=\"tooltip\">";
                                        echo $all[timeRides];
                                     
                                    echo "</li>";

                                    echo "<li class=\"ride-people\">";
                                        echo "< class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">";
                                          //  echo "<i class=\"fa fa-user\"></i>";
                                          if ($all[seats] == 1) {
                                            echo $all[seats]. "     Mjesto";
                                          }
                                          else{
                                            echo $all[seats]."      Mjesta ";
                                          }

                                      
                                    echo "</li>"; //"<!-- end .ride-people -->

                                    echo "<li class=\"ride-times\">";
                                      echo "< class=\"tooltip-link\" data-original-title=\"Date\" data-doggle=\"tooltip\">";
                                        echo $all[cost]. " KM";
                                     
                                    echo "</li>";

                                echo "</ul>"; //"<!-- end .ride-meta -->

                            echo "</article>"; //"<!-- end .ride-box -->
                            echo "</a>";
                    }

}

if(isset($_POST['search-btn'])){

  $sql = "SELECT startpoint,endpoint,dateRides,seats FROM rides WHERE startpoint='".$startpoint."' AND endpoint = '".$endpoint."' AND dateRides ='".$dateRides."' AND  seats ='".$seats."'";

  $results=mysqli_query($conn,$sql);

  header("Refresh:0 ../rides.php");

  print_rides($results);

}
else{
  $sql = "SELECT * FROM rides";

  $results=mysqli_query($conn,$sql);

  print_rides($results);

}
