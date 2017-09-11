
<?php
function calcexp( $exp ){
$arr_n = array();
$arr_op = array();
while( ($s = array_pop( $exp )) != '' ){
if( $s == '(' ){
$temp = array(); $quote = 1; $endquote = 0;
while( ($t = array_pop($exp)) != '' ){
if( $t == '(' ){
$quote++;
}
if( $t == ')' ){
$endquote++;
if( $quote == $endquote ){
break;
}
}
array_push($temp, $t);
}
$temp = array_reverse($temp);
array_push($arr_n, calcexp($temp) );
}else if( $s == '*' || $s == '/' ){
$n2 = array_pop($exp);
if( $n2 == '(' ){
$temp = array(); $quote = 1; $endquote = 0;
while( ($t = array_pop($exp)) != '' ){
if( $t == '(' ){
$quote++;
}
if( $t == ')' ){
$endquote++;
if( $quote == $endquote )
break;
}
array_push($temp, $t);
}
$temp = array_reverse($temp);
$n2 = calcexp($temp);
}
$op = $s;
$n1 = array_pop($arr_n);
$result = operation($n1, $op, $n2);
array_push($arr_n, $result);
}elseif( $s == '+' || $s == '-' ){
array_push($arr_op, $s);
}else{
array_push($arr_n, $s);
}
}
$n2 = array_pop($arr_n);
while( ($op = array_pop($arr_op)) != '' ){
$n1 = array_pop($arr_n);
$n2 = operation($n1, $op, $n2);
}
return $n2;
}
function operation( $n1, $op, $n2 ){
switch ($op) {
case '+':
return intval($n1) + intval($n2);
break;
case '-':
return intval($n1) - intval($n2);
break;
case '*':
return intval($n1) * intval($n2);
break;
case '/':
return intval($n1) / intval($n2);
break;
}
} 
function comput($exp){
error_reporting(E_ALL);
$arr_exp = array();
for($i=0;$i<strlen($exp);$i++){
$arr_exp[] = $exp[$i];
}
$result = calcexp( array_reverse($arr_exp) );
echo $exp . '=' . $result;
}
