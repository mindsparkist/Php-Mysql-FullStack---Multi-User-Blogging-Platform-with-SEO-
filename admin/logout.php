<?php
 if (isset($_COOKIE["Remember_me"])) {
     setcookie("Remember_me", "true", time()-3600);
     header("Location:http://localhost/blog/index.php");
 } else {
     header("Location:index.php");
 }
