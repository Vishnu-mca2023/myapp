<?php
// Number examples
$a = -10;
$b = 4.6;
$c = 4.2;
$d = 4.9;
$numbers = [10, 20, 30];

// 1. abs()
echo "1. abs(-10): " . abs($a) . "\n <br><br>";

// 2. round()
echo "2. round(4.6): " . round($b) . "\n ";
echo "   round(4.4): " . round(4.4) . "\n <br><br>";

// 3. ceil()
echo "3. ceil(4.2): " . ceil($c) . "\n <br><br>";

// 4. floor()
echo "4. floor(4.9): " . floor($d) . "\n <br><br>";

// 5. max()
echo "5. max(10,20,30): " . max($numbers) . "\n <br><br>";

// 6. min()
echo "6. min(10,20,30): " . min($numbers) . "\n <br><br>";

// 7. sqrt()
echo "7. sqrt(16): " . sqrt(16) . "\n <br><br>";

// 8. pow()
echo "8. pow(2,3): " . pow(2, 3) . "\n <br><br>";

// 9. rand()
echo "9. rand(1,100): " . rand(1, 100) . "\n <br><br>";

// 10. pi()
echo "10. pi(): " . pi() . "\n <br><br>";
?>
