<?php
// 課題1
$name = 'kanako';

if($name == 'kanako') {
    echo '私は'.$name.'です'."\n";
} else {
    echo $name.'ではありません'."\n";
}

// 課題2
$sum = 0;
for($i = 1; $i <= 10000; $i++) {
    $sum += $i;
}
echo $sum."\n";

// 課題3
$fruits = ['apple', 'peach', 'grape', 'strawberry', 'orange'];
foreach($fruits as $fruit) {
    echo $fruit."\n";
}

// 課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0) {
    echo $i."\n";
  }
}