<?php
$con = mysql_connect("sql1.ecohost.coop","c14_gfn_user","p1p3l1n3!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } else {
	echo 'boom';
}
?>