<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = 0;
    $lowerString = strtolower($string);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach ($vowels as $vowel) {
        $vowelCount += substr_count($lowerString, $vowel);
    }
    
    // Reverse string
    $reversedString = strrev($string);
    
    // Print results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

