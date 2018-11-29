<?php 

	$num = "153";

	$isFlower = flower($num);

	if ($isFlower) {
		echo "This is the Flower Num";
	}else{
		echo "This is not the Flower Num";
	}

	//调用水仙花方法
	function flower($num){

		//百位
		$Hundred = intval($num/100);

		//个位
		$Unit  = intval($num%10);

		$BeforeData = pow($Hundred, 3)+pow($Unit,3);

		$SecondNum = $num-$BeforeData;

		$SecondNum = pow($SecondNum,1/3);

		if ($num!=$Hundred.$SecondNum.$Unit) {
			
			return false;

		}else{

			return true;

		}

	}







 ?>