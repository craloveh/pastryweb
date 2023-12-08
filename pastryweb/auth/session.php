<?php

if(empty($_SESSION['uid']))
{
$url='login.php';

///auth
header("Location: $url");
}
else{

}

?>