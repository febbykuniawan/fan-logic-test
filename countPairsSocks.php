<?php
function countPairs($socks) {
    $sockCount = array();
    $pairCount = 0;

    foreach ($socks as $sock) {
        if (isset($sockCount[$sock])) {
            $sockCount[$sock]++;
            if ($sockCount[$sock] % 2 == 0) {
                $pairCount++;
            }
        } else {
            $sockCount[$sock] = 1;
        }
    }

    return $pairCount;
}

$inputA = [10, 20, 20, 10, 10, 30, 50, 10, 20, 20];
$outputA = countPairs($inputA);
echo "Output a: " . $outputA . "\n";

$inputB = [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];
$outputB = countPairs($inputB);
echo "Output b: " . $outputB . "\n";

$inputC = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
$outputC = countPairs($inputC);
echo "Output c: " . $outputC . "\n";

?>