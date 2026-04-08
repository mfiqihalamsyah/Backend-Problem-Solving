<?php
function sortArray($arr)
{
    $alphabets = [];
    $numbers = [];

    foreach ($arr as $item) {
        if (is_numeric($item)) {
            $numbers[] = (int)$item;
        } else {
            $alphabets[] = $item;
        }
    }

    sort($alphabets);
    sort($numbers);

    return array_merge($alphabets, $numbers);
}

$arr = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];
$sortedArr = sortArray($arr);

// Menampilkan hasil dalam format JSON
echo json_encode($sortedArr); // Output: ["A", "B", "J", "M", "N", 9, 12, 30, 82, 99]
