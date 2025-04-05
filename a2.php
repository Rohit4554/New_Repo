<?php
  
  session_start();
  if(!isset($_SESSION['visit_count']))
  {
   $_SESSION['visit_count'] = 0;
  }
 
  $_SESSION['visit_count']++;
  
  if(!isset($_COOKIE['total_visits']))
  {
   $total_visits = 1;
  }
  else
  {
  $total_visits = $_COOKIE['total_visits']+1;
  }
  
  setcookie('total_visits', $total_visits, time() + (24*60*60*1));
 
  
?>

<html>
  <head>
    <title>Page Visit Tracker</title>
  </head>
  
  <body>
	<h1>Welcome to the page visit Tracker</h1>
  	<p>
          This is your <?php echo $_SESSION['visit_count'];?> visit in this session.
        </p>
  
        <p>
 	 You have accessed this page<?php echo $total_visits;?> times in total(Tracked using cookies)
        </p>   
  </body>
</html>
