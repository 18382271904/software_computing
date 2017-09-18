<?php
//include('./index.php');
//$name=$_POST['name'];
//
require_once('./conn.php');
conn();
mysql_select_db('count');
$sql="select * from counting order by time desc limit 1";
$result = mysql_query($sql) or  die (mysql_error());
$row = mysql_fetch_array($result);
$names=$row["name"];
$classs=$row["class"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>jquery.countdown.js自定义倒计时代码</title>

<script src="js/jquery.js"></script>
<script src="js/jquery.countdown.js"></script>

<link href='css/jquery.countdown.css'  rel="stylesheet" type="text/css"/>

</head>
<body><script src="/demos/googlegg.js"></script>
<div class="setting">
	Hour：<input type="text" name="" class="input hour" maxlength="2" value="00" />
	Minute：<input type="text" name="" class="input minute" maxlength="2" value="00" />
	Second：<input type="text" name="" class="input second" maxlength="2" value="00" />
	<a class="begin" onclick="Countdown.init()">Start</a>
	<div class="change" >
	<span class="lauguage">change lauguge</span>
	<form>
	<select name="change" onchange="javascript:location.href=this.value;">
	<option selected="selected">english</option>	
    <option value ="./index.php">中文</option>
    <option value ="./japan.php">日本语</option>
</select>
</form>
    </div>
</div>
<div class="time">
	<ul>
		<li class="num"><span class="static old">0</span></li>
		<li class="num"><span class="static old">0</span></li>
		<li><span>:</span></li>
		<li class="num"><span class="static old">0</span></li>
		<li class="num"><span class="static old">0</span></li>
		<li><span>:</span></li>
		<li class="num"><span class="static old">0</span></li>
		<li class="num"><span class="static old">0</span></li>
	</ul>
<div>
	<div class="sm">
		*instruction*<br/>
		This system has five problems at a time. Please choose the time according to the actual situation <br/>
        Difficulty coefficient 1, please set the time for 1 minute<br/>
		Difficulty coefficient 2. Please set the time for 1 minute and 20 seconds <br/>
		Difficulty coefficient 3, please set the time for 1 minute 40 seconds<br/>
		
	</div>
<p class="attention1">
Please pay attention to the time. Please finish it in time<span class="icon"><span></p>
<div class="phper">
<?php
require_once('./computing.php');
 $number1=array();
for($i=0;$i<7;$i++){
$num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3=rand(1, 100);
$opt = array('+', '-', '*', '/','(',')');
$optrand1= $opt[rand(0, 3)];
$optrand2= $opt[rand(0, 3)];
$lc="(";
$rc=")";
$exp=$lc.$num1 . $optrand1 . $num2.$rc. $optrand2.$num3;
//$exp = "((3+1)*6)";
//echo $exp;
//$exp="3+4/5+4*5+5/3";
$number1[$i] = eval("return $exp;");
//$number1[$i]=comput($exp);方法2调用正则函数
echo "Question".($i+1).": ".$exp."="."<br/>";//<html><input type="text" value=""/></html>
}
//print_r($number1[1]);
?>
<div class="datika">
<i>answer sheet </i>
<form action="../demo3/index.php" method="post">
<font size="+1">1、<input type="text" name="a1"/></font>
<font size="+1">2、<input type="text" name="a2"/></font>
<font size="+1">3、<input type="text" name="a3"/></font>
<font size="+1">4、<input type="text" name="a4"/></font>
<font size="+1">5、<input type="text" name="a5"/></font>
<font size="+1">6、<input type="text" name="a6"/></font>
<font size="+1">7、<input type="text" name="a7"/></font>
<font size="+1">8、<input type="text" name="a8"/></font>
<input type="submit" name="tj" values="submit"/>

</form>

 </div>
</div>

<marquee class="affiche" align="absbottom" behavior="scroll" direction="right" height="100" width="%100" hspace="50" vspace="20" loop="-1" scrollamount="10" scrolldelay="100" onMouseOut="this.start()" onMouseOver="this.stop()">
<?php 
echo "welcome!".$names."in class ".$classs;
?>
</marquee>
</body>
</html>