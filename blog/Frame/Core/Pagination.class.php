<?php
	//下面这个类封装了一个分页的代码
	class Pagination{
		public function getnumber($url,$curlpage,$totalrows,$rowspage){//传入四个必要的参数，地址，当前页，数据总数，每页的数据数
			$totalpages=ceil($totalrows/$rowspage);//得到总共的页数
			if($curlpage<=5){//判断当前页是否小于五，主要为了后面显示页数用的
				$start=1;//如果小于的话显示的页数就是1-10页
				$end=$start+9>$totalpages?$totalpages:$start+9;
			}else{//如果不是小于五的话，那就显示当前页+5-9到当前页+5的页面数
				$end=$curlpage+5>$totalpages?$totalpages:$curlpage+5;//这里要判断是否加的时候超过了最大的页数
				$start=$end-9<1?1:$end-9;//这里是判断减的时候是否小于了最小的页数
			}
			$prv=$curlpage-1<1?1:$curlpage-1;//这里是显示上一页的页数
			$next=$curlpage+1>$totalpages?$totalpages:$curlpage+1;//这里是显示下一页的页数
			$pagestring='';//定义一个空字符串，主要是为了连接后面的各个a标签
			$pagestring.=" <ul class='pagination'><li><a href='$url&curlpage=1'>首页</a></li></ul>";
			$pagestring.="<ul class='pagination'><li><a href='$url&curlpage=$prv'>上一页</a></li></ul>";
			$pagestring.="<ul class='pagination pagination-group'>";
			for($i=$start;$i<=$end;$i++){
				if($i==$curlpage){
					$pagestring.="<li class='active'><a href='$url&curlpage=$i'><font color='red'>$i</font></a></li>";//如果当前页就显示红色
				}else{
					$pagestring.="<li><a href='$url&curlpage=$i'><font color='black'>$i</font></a><li>";//如果不是当前页就显示黑色
				}
			}
			$pagestring.="</ul>";
			$pagestring.="<ul class='pagination'><li><a href='$url&curlpage=$next'>下一页</a></li></ul>";
			$pagestring.="<ul class='pagination'><li><a href='$url&curlpage=$totalpages'>尾页</a></li></ul>";
			return $pagestring;

		}
	}