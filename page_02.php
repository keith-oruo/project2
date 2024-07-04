<?php

session_start();
if(isset($_SESSION["fname"])){
    print 'hey' . $_SESSION["fname"];
    
}else{
    header("Location:page_03.php");
}
?>
<br>
