<?php
error_reporting(E_ALL || ~E_NOTICE);
$ma1=$_POST['a1'];
$ma2=$_POST['a2'];
$ma3=$_POST['a3'];
$ma4=$_POST['a4'];
$ma5=$_POST['a5'];
$ma6=$_POST['a6'];
$ma7=$_POST['a7'];
$ma8=$_POST['a8'];
?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>成绩查看</title>

<link rel="stylesheet" href="css/clouds.css" />

</head>
<body>
	<div class="an"><div class="zi">答案公布</div></div>
	<div class="com">
	<?php
  session_start();
  $myanswer = array($ma1,$ma2,$ma3,$ma4,$ma5,$ma6,$ma7);
  $result=array_intersect($_SESSION['temp'],$myanswer);
  $re=count($result); //$result;
  //print_r($_SESSION['temp']);
  //$sname=$_SESSION['sname'];
     for($i=0;$i<7;$i++)
     {
             echo "第".($i+1)."题答案为：".$_SESSION['temp'][$i].'<br> ';
     }
     echo "你的答案为:".'<br>';
     echo $ma1.','.$ma2.','.$ma3.','.$ma4.','.$ma5.','.$ma6.','.$ma7.'<br>';
     echo "恭喜你,你一共做对了".$re."道题","得分为".$re."分";//.$sname;

 // $as = $_COOKIE['mycookie'];
    // print_r($as);
    /* for($a=0;$a<7;$a++)
     {
     	echo $ma.$a;
     }
     */
?>
</div>
<div id="far-clouds" class="stage far-clouds"></div>
<div id="near-clouds" class="stage near-clouds"></div>

<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/clouds.js"></script>
<script src="js/app.js"></script>
</div>
</body>
</html>