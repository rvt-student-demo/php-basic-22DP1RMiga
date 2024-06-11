<?php
# Exercise 1
echo "1) Hello, World!";

# Exercise 2
echo "\n\n2) Today is " . date("d/m/Y");
echo "The time is " . date("H:i:s a");

# Exercise 3
$x = 1;
$y = 2;

echo "\n\n3) {$x} + {$y} = " . $x + $y;

# Exercise 4
$a = 10;

if ($a % 2 == 0) {
    echo "\n\n4) The number {$a} is even";
} else if ($a % 2 != 0) {
    echo "\n\n4)The number {$a} is odd";
}

# Exercise 5
$b = 6;
$c = 11;

echo "\n\n5) MAX number: " . max($b, $c);

# Exercise 6
$text1 = "Andris ir gejs";
echo "\n\n6) Original text: {$text1}";
echo "\nReversed text: " . strrev($text1);

# Exercise 7
$text2 = 1442;
$text3 = strrev((string)$text2);

echo "\n\n7) Given something: {$text2}";

if ($text2 == $text3) {
    echo "\nAnswer: This is a palindrome";
} else {
    echo "\nAnswer: This is not a palindrome";
}

# Exercise 8
echo "\n\n8) Random number generated (1-10): " . rand(1, 10);

# Exercise 9
$text4 = "aiziet mega draft";
echo "\n\n9) Original text: {$text4}";
echo "\nText in uppercase: " . strtoupper($text4);

# Exercise 10
$text5 = "I like coding in PHP";
echo "\n\n10) Text: {$text5}";
echo "\nThe number of words: " . str_word_count($text5);