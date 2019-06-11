<?php

session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
// if (isset($_POST['logout-submit'])) {
//   session_stop();
//   header("Location: ../index.php");
//   exit();
// }
// else{
//   header("Location: ../index.php");
//   exit();
// }
