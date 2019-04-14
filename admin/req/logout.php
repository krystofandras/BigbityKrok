<?php
session_start();
session_destroy();
ob_start();
echo"Ok cs, bye, čau, zdar, ahoj mě*";
header( "refresh:2;url=http://bigbityrock.cz" );
ob_end_flush();
?>