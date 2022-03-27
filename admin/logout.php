<?php
 if (isset($_COOKIE["Remember_me"])) {
     setcookie("Remember_me", "", time()-1800);
     header("Location: http://localhost/blog/index.php");
 } else {
     header("Location:index.php");
 }
