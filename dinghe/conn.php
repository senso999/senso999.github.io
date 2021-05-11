<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$link=mysqli_connect("qdm722903296.my3w.com","qdm722903296","Su520520","qdm722903296_db") or die("连接失败");
	mysqli_query($link,"set names utf8");
    date_default_timezone_set("PRC");

$web_result=mysqli_query($link,"select * from b_webset");
$web_info=mysqli_fetch_array($web_result);


//echo str_replace("丛台","<font color=red>丛台</font>","邯郸丛台酒业公司丛台酒10年陈醋");

	?>