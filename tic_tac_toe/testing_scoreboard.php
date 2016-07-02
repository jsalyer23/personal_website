<?php
$scoreboard = "333333333000";

echo $scoreboard[9] . "\n";
echo $scoreboard[10] . "\n";
echo $scoreboard[11] . "\n";

if($scoreboard[9] == 0) {
	$scoreboard[9] = 9;
}

echo $scoreboard[9] . "\n";
echo $scoreboard[10] . "\n";
echo $scoreboard[11] . "\n";

echo $scoreboard;

?>