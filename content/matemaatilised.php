<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1=10;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "Liidame arv1 ja arv2 arv1+arv2 = ".$liitmine."<br>";
echo "Kui lahutame arv1 ja arv2 arv1-arv2 = ".$lahut."<br>";
echo "Korrutame arv1 ja arv2 arv1*arv2 = ".$korrutis."<br>";
echo "Jagame arv1 ja arv2 arv1/arv2 = ".$jagamine."<br>";
echo "Omistamise operaatorid: ";
echo "<br> \$arv1++ - suurendamine ühe võrra $arv1=$arv1+1";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1 ." - suurendamine ühe võrra";
echo "<br>";
$arv1=10;
// $arv1++ - vähendamine ühe võrra $arv1=$arv1-1
$arv1--;
echo $arv1 ." - vähendamine ühe võrra";