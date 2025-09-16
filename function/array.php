<?php
// Initial array
$fruits = ["banana", "apple", "orange", "apple"];


// 1. count()
echo "Total fruits: " . count($fruits) . "<br>";
echo "<br>";
// 2. array_push()
array_push($fruits, "mango");
echo "Array push ";
print_r($fruits);
echo "<br><br>";

// 3. array_pop()
array_pop($fruits);
echo "Array pop";
print_r($fruits);
echo "<br><br>";

// 4. array_shift()
array_shift($fruits);
echo "Array shift ";
print_r($fruits);
echo "<br><br>";

// 5. array_unshift()
array_unshift($fruits, "Grapes");
echo " unshift  ";
print_r($fruits);
echo "<br><br>";


// 6. in_array()
echo "Is 'apple' in fruits?" . (in_array("apple", $fruits) ? "Yes" : "No") . "<br><br>";

// 7. array_merge()
$moreFruits = ["grape", "melon"];
$merged = array_merge($fruits, $moreFruits);
echo " Array merge  ";
print_r($merged);

echo "<br><br>";

// 8. array_unique()
$unique = array_unique($merged);
echo "Array Unique";
print_r($unique);
echo "<br><br>";

// 9. array_search()
$pos = array_search("orange", $unique);
echo "array search': " . $pos . "<br><br>";

// 10. sort() / rsort()
sort($unique);
echo "Sorted ascending: ";
print_r($unique);
echo "<br><br>";

rsort($unique);
echo " Sorted descending: ";
print_r($unique);
echo "<br><br>";
?>
