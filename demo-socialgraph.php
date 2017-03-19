<?php
include 'Facebook.php';
include 'SocialGraph.php';

$fbUdin = new Facebook("Udin", "Udin Sedunia");
$fbUdin->like();
$fbUdin->like();

$fbMalih = new Facebook("Malih", "Malih Icikiwir");
$fbMalih->like();
$fbMalih->like();
$fbMalih->like();

$socialGraph = new SocialGraph();
$socialGraph->compareLike($fbUdin, $fbMalih);
?>
