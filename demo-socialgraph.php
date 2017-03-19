<?php
include 'Facebook.php';
include 'Twitter.php';
include 'SocialGraph.php';

$fbUdin = new Facebook("Udin", "Udin Sedunia");
$fbUdin->like();
$fbUdin->like();

$twMalih = new Twitter("Malih", "Malih Icikiwir");
$twMalih->favorite();
$twMalih->favorite();
$twMalih->favorite();

$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbUdin, $twMalih);
?>
