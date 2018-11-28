<?php 
	
	//字符串
	$str = "Have you ever gone shopping and";

	$word = getWord($str);

	echo $word;

	//获取字母方法
	function getWord($str){

		//定义一个新数组
		$arr = array();
		//定义一个存放最后字母的变量
		$res = '';

		//循环遍历字符串
		for ($i=0,$len = strlen($str); $i < $len; $i++) { 
			//判断数组内是否存放
			if (isset($arr[$str[$i]])) {
				
				$arr[$str[$i]]++;

			}else{

				$arr[$str[$i]]=1;

			}
			//判断是否首先出现三次
			if ($arr[$str[$i]]==3) {

				$res = $str[$i];break;

			}

		}

		return $res;

	}





 ?>