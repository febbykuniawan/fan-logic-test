<?php
function countWordsWithoutSpecialChars($input) {
    $specialCharsPattern = '/[\*\_\(\[\!\=\&]/';
    $words = preg_split('/\s+/', $input);
    $wordCount = 0;

    foreach ($words as $word) {
        if (!preg_match($specialCharsPattern, $word)) {
            $wordCount++;
        }
    }

    return $wordCount;
}

$inputA = "Saat meng@ecat tembok, Agung dib#antu oleh Raihan.";
$outputA = countWordsWithoutSpecialChars($inputA);
echo "Output a: " . $outputA . "\n";

$inputB = "Berapa u$mur minimal# untuk ?mengurus ktp?";
$outputB = countWordsWithoutSpecialChars($inputB);
echo "Output b: " . $outputB . "\n";

$inputC = "Masing-masing anak mendap%atkan uang jajan ya?ng be&rbeda.";
$outputC = countWordsWithoutSpecialChars($inputC);
echo "Output c: " . $outputC . "\n";
?>