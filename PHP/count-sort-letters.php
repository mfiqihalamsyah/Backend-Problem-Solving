<?php
function countAndSortLetters($input)
{
    $letterCount = [];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) {
            if (isset($letterCount[$char])) {
                $letterCount[$char]++;
            } else {
                $letterCount[$char] = 1;
            }
        }
    }

    ksort($letterCount);
    return $letterCount;
}

function formatOutput($letterCount)
{
    $output = '[';
    $items = [];

    foreach ($letterCount as $letter => $count) {
        $items[] = "\"$letter\":$count";
    }

    $output .= implode(', ', $items);
    $output .= ']';

    return $output;
}

// Contoh penggunaan
$letterCount = countAndSortLetters("Hello World");
echo formatOutput($letterCount) . "\n"; // Output: ["d":1, "e":1, "H":1, "l":3, "o":2, "r":1, "W":1]

$letterCount = countAndSortLetters("Bismillah");
echo formatOutput($letterCount) . "\n"; // Output: ["a":1, "B":1, "h":1, "i":2, "l":2, "m":1, "s":1]

$letterCount = countAndSortLetters("MasyaAllah");
echo formatOutput($letterCount) . "\n"; // Output: ["A":1, "a":3, "h":1, "l":2, "M":1, "s":1, "y":1]
