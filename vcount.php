<?php
session_start();

if (!isset($_SESSION['session_cnt'])) 
{
    $_SESSION['session_cnt'] = 1;
} 
else 
{
    $_SESSION['session_cnt']++;
}
if (!isset($_COOKIE['cookie_cnt'])) 
{
    $cookie_cnt = 1; 
} 
else 
{
    $cookie_cnt = $_COOKIE['cookie_cnt'] + 1; 
}

setcookie('cookie_cnt', $cookie_cnt, time() + (86400 * 30), "/");

echo "Session Visit Count: " . $_SESSION['session_cnt'] . "<br>";
echo "Total Visit Count (Cookie): " . $cookie_cnt;
?>
