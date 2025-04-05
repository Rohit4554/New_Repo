<?php
session_start();
 $vcount = $_SESSION['cnt'];
 $vcount++;
 $_SESSION['cnt']=$vcount;
 echo "You have visited $vcount Times on this site."

?>
