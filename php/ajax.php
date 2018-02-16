<?
	$var1 = $_POST['input1'];
	$var2 = $_POST['input2'];
	$var3 = $_POST['input3'];
	$var4 = $_POST['identity'];

	$list = array('data1'=>$var1 , 'data2'=>$var2 , 'data3'=>$var3 , 'data4'=>$var4);
	$c = json_encode($list);

	echo $c;
?>