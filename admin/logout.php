<?php
 if (isset($_COOKIE["Remember_me"])) {
     setcookie("Remember_me", "true", time()-36);
     header("Location:index.php");
 } else {
     header("Location:index.php");
 }
