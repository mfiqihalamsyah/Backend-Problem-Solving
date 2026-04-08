<?php
function pattern_count($text, $pattern)
{
    $count = 0;
    $pattern_len = strlen($pattern);
    $text_len = strlen($text);

    if ($pattern_len == 0) {
        return 0;
    }

    for ($i = 0; $i <= $text_len - $pattern_len; $i++) {
        $match = true;
        for ($j = 0; $j < $pattern_len; $j++) {
            if ($text[$i + $j] != $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }

    return $count;
}

// Contoh penggunaan
echo pattern_count("palindrom", "ind") . "\n";  // Output: 1
echo pattern_count("abakadabra", "ab") . "\n";  // Output: 2
echo pattern_count("hello", "") . "\n";         // Output: 0
echo pattern_count("ababab", "aba") . "\n";     // Output: 2
echo pattern_count("aaaaaa", "aa") . "\n";      // Output: 5
echo pattern_count("hell", "hello") . "\n";     // Output: 0
