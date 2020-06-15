<?php
//--COOKIE EXPIRES IN 1 HOUR
 setcookie('user', $user['email'], time()-3600, "/");
 header('Location: index.PHP');
 ?>
