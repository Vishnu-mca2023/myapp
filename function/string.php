<?php
// Enter your text here
$text = "  hello world  ";

echo "Original Text: '$text'\n\n";
echo "<br><br>";

// 1. strlen()
echo "1. Length (strlen): " . strlen($text) . "\n";
echo "<br><br>";

// 2. str_word_count()
echo "2. Word Count (str_word_count): " . str_word_count($text) . "\n";
echo "<br><br>";

// 3. strrev()
echo "3. Reverse (strrev): " . strrev($text) . "\n";
echo "<br><br>";

// 4. strpos()
echo "4. Position of 'e' (strpos): " . (strpos($text, "e") !== false ? strpos($text, "e") : "Not found") . "\n";
echo "<br><br>";

// 5. str_replace()
echo "5. Replace 'world' with 'PHP': " . str_replace("world", "PHP", $text) . "\n";
echo "<br><br>";

// 6. strtoupper()
echo "6. Uppercase (strtoupper): " . strtoupper($text) . "\n";
echo "<br><br>";

// 7. strtolower()
echo "7. Lowercase (strtolower): " . strtolower($text) . "\n";
echo "<br><br>";

// 8. ucfirst()
echo "8. ucfirst: " . ucfirst($text) . "\n";
echo "<br><br>";

// 9. ucwords()
echo "9. ucwords: " . ucwords($text) . "\n ";
echo "<br><br>";

// 10. trim()
echo "10. trim: '" . trim($text) . "'\n";
echo "<br><br>";
?>
