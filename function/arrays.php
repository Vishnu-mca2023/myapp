<?php
// Initial array
$fruits = ["banana", "apple", "orange", "apple", "mango"];

// 1. count()
echo "1. Total fruits: " . count($fruits) . "<br><br>";

// 2. array_push()
array_push($fruits, "grape");
echo "2. After push (add grape): ";
print_r($fruits);
echo "<br><br>";

// 3. array_pop()
array_pop($fruits);
echo "3. After pop (remove last): ";
print_r($fruits);
echo "<br><br>";

// 4. array_shift()
array_shift($fruits);
echo "4. After shift (remove first): ";
print_r($fruits);
echo "<br><br>";

// 5. array_unshift()
array_unshift($fruits, "Pineapple");
echo "5. After unshift (add Pineapple at start): ";
print_r($fruits);
echo "<br><br>";

// 6. in_array()
echo "6. Is 'apple' in fruits? " . (in_array("apple", $fruits) ? "Yes" : "No") . "<br><br>";

// 7. array_merge()
$moreFruits = ["pineapple", "melon"];
$merged = array_merge($fruits, $moreFruits);
echo "7. After merge with moreFruits: ";
print_r($merged);
echo "<br><br>";

// 8. array_unique()
$unique = array_unique($merged);
echo "8. After removing duplicates: ";
print_r($unique);
echo "<br><br>";

// 9. array_search()
$pos = array_search("orange", $unique);
echo "9. Position of 'orange': " . $pos . "<br><br>";

// 10. sort() / rsort()
sort($unique);
echo "10. Sorted ascending: ";
print_r($unique);
echo "<br><br>";

rsort($unique);
echo "    Sorted descending: ";
print_r($unique);
echo "<br><br>";

// 11. array_map() → apply function to all elements
$upperFruits = array_map("strtoupper", $unique);
echo "11. Uppercase fruits (array_map): ";
print_r($upperFruits);
echo "<br><br>";

// 12. array_filter() → filter elements (example: keep fruits with length > 5)
$longFruits = array_filter($unique, function($fruit){
    return strlen($fruit) > 5;
});
echo "12. Fruits with length > 5 (array_filter): ";
print_r($longFruits);
echo "<br><br>";

// 13. array_reverse()
$reversed = array_reverse($unique);
echo "13. Reversed array (array_reverse): ";
print_r($reversed);
echo "<br><br>";

// 14. array_slice()
$sliced = array_slice($unique, 0, 3); // first 3 elements
echo "14. First 3 fruits (array_slice): ";
print_r($sliced);
echo "<br><br>";

// 15. array_keys() & array_values()
$keys = array_keys($unique);
$values = array_values($unique);
echo "15. Array Keys: ";
print_r($keys);
echo "<br>Values: ";
print_r($values);
echo "<br><br>";
?>
