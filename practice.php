<?php
echo 'hello php!';

$a = 3;
$b = 7;
echo $a+$b;

echo "\n";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

echo "\n";

$hello = "HELLO,";
$name = "namae";
$world = "'s World!";
echo $hello.$name.$world;

echo "\n";

$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;

echo "\n";

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar["December"];

echo "\n";
echo "\n";
echo "\n";

//php 03
$name = "miyasita";
if($name == "miyasita"){
  echo "私は".$name."です";
}else{
 echo "あなたの名前ではありません";
}

echo "\n";

$int = 100000;
$total = 0;
for($i=$int;$i;$i--){
  $total+=$i;
}
echo $total;

echo "\n";

$fruits = [
"アーモンド",
"イチョウ",
"クリ",
"クルミ（胡桃）",
"ペカン"
];
foreach($fruits as $i){
  echo $i."\n";
};

echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}

echo "\n";
echo "\n";
echo "\n";

//php 04

function double($int){
  $int*=2;
  return $int;
}

echo "\n";

function sum($a,$b){
  return $a+$b;
}

echo "\n";

function product($arr){
  $total = 1;
  foreach($arr as $int){
    $total*=$int;
  }
  return $total;
}

echo "\n";

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a) $max_number = $a;
  }
  return $max_number;
}

echo "\n";
