<?php

$mtk = 80;
$bahasaIndonesia = 90;
$bahasaInggris = 89;
$ipa = 69;

$total = $mtk + $bahasaIndonesia + $bahasaInggris + $ipa;
$average = $total / 4;

echo "Matematika = ".$mtk."<br/>";
echo "bahasa Indonesia = ".$bahasaIndonesia."<br/>";
echo "Bahasa Inggris = ".$bahasaInggris."<br/>";
echo "IPA = ".$ipa."<br/>";
echo "<br/>";
echo "Rata - rata = ".$average;
echo "<br/>";

if($average >= 90 && $average <= 100) {
    $grade = "A";
} elseif($average >= 80) {
    $grade = "B";
} elseif($average >= 70) {
    $grade = "C";
} elseif($average >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}
echo "Grade = ".$grade;

?>