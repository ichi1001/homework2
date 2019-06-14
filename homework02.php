<?php
//1
$a = 3;
$b = 7;
echo $a + $b;
//2
$array_month = [
  "１月",
  "２月",
  "３月",
  "４月",
  "５月",
  "６月",
  "７月",
  "８月",
  "９月",
  "10月",
  "11月",
  "12月"
];
echo $array_month [7];

//3
$hello = "Hello,";
$name = " Fukaya";
$world = "’s World!";
echo $hello.$name.$world;

//4
$tech_boost = "tech";
echo $tech_boost." boost";

//5
//$2018_calendar = {
  //"January" => "1月",
  //"February" => "2月"、
  //"March" => "3月",
  //"April" => "4月",
  //"May" => "5月",
  //"June" = "6月",
  //"July" => "7月",
  //"August" => "8月",
  //"September" => "9月",
  //"October" => 10月,
  //"November" => "11月",
  //"December" => "12月"
//};

// 12月を表示する
//echo $2018_calendar[December];

$calender_2018 = [
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
 echo $calender_2018["December"];
?>
