<?php
session_start();

if(isset($_SESSION["fname"])){
    print 'Yes the session is alive';
    print '<br><a href="page_04.php">Destroy the session</a>';
}else{
    print 'no the session is destroyed';
    print'<br><a href="page_01.php">Create a new session</a>';
}
?>