<?php
$fcontents = join ('', file ('banner_ads.txt'));
$s_con = explode("~",$fcontents);
$banner_no = rand(0,(count($s_con)-1));
echo $s_con[$banner_no];
?>

