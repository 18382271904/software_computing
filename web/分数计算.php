<?php
$s = '1/4+1/5';

preg_match_all("#((\d+)/(\d+))([-+/*]*)#", $s, $reg);

for($i=0; $i<count($reg[1]); $i++) {
  $d[] = array($reg[2][$i], $reg[3][$i]);
  $f[] = $reg[4][$i];
}

foo($d[0], $d[1]);

$a = eval("return {$d[0][0]} {$f[0][0]} {$d[1][0]};");
$y = gcd($a, $d[0][1]);

echo $a/$y . '/'. $d[0][1]/$y;

/** 通分 **/
function foo(&$a, &$b) {
  $f = $a[1] * $b[1];
  $a = array($a[0] * $f/$a[1], $f);
  $b = array($b[0] * $f/$b[1], $f);
}

/**
辗转相除求最大公约数
**/
function gcd($a, $b) {
  if($a % $b)
    return gcd($b, $a % $b);
  else
    return $b;
} 

?>