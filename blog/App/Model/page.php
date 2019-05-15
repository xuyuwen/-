<?php
	//以下是分页原理代码
	$totalrows=121;//总记录数
	$rows=10;//每页的记录数
	$page=celi($totalrows/$rows);//总页数
	//获取当前页
	$curlpage=$_GET['curpage']??1;
	$pagestring='';
	for($i=1;$i<$page;$i++){
		$pagestring="<a href=page.php?curpage=$i>$i</a>";
	}
	echo $pagestring;