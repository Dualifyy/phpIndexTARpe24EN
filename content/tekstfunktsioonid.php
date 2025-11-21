<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst='Veebirakendused on arvutitarkvara programmid';
echo $tekst; //näitab muutuja sisu
echo "<br>";
echo "Mitu sõna on lauses (str_word_count();) - ".str_word_count($tekst). "tk";
//metshein.com
echo "<br>";
echo "Kõik tähed muudab väiksemaks - strtolower() - ".strtolower($tekst);
echo "<br>";
echo "Kõik tähed muudab suuremaks - strtoupper() - ".strtoupper($tekst);
echo "<br>";
$tekst2 = 'Rimi Pizza On Suht Soodne.';
echo "<br>";

echo ucfirst(strtolower($tekst2));
$tekst3 = 'Veebirakendused on väga populaarsed';
echo strlen($tekst3);
echo "<br>";
echo "<h2>Teksti kärpimine</h2>";
echo "<br>";
$tekst4 = ' 	Õunad banaanid ploomid kapsad tomatid kurgid   ';
echo "<pre>$tekst4</pre>";
echo "<pre>".trim($tekst4)."</pre>";
echo "<pre>".ltrim($tekst4)."</pre>";
echo "<pre>".rtrim($tekst4)."</pre>";

echo "<br>";

$tekst5 = 'A woman should soften but not weaken a man';
echo trim($tekst5, "A, a, k..n, w");	//oman should soften but not weake

echo "<br>";

$tekst6 = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst6); 	//Experience is the teacher of fools

echo "<br>";

$tekst7 = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst7, '<b>, <br>'); 	//<b>Experience</b> is the teacher <br>of fools

echo "<br>";
echo "<h2>Tekst kui massiiv</h2>";
echo "<br>";
$tekst8 = 'All thinking men are atheists';
echo $tekst8[0]; 				//A
echo "<br>";
echo $tekst8[4]; 				//t

echo "<br>";

$tekst9 = 'All thinking men are atheists';
echo substr($tekst9, 3, 5);		//thin
echo "<br>";
echo substr($tekst9, 4, -13);	//thinking men
echo "<br>";
echo substr($tekst9, -8, 7);		//atheist

echo "<br>";


$tekst10 = 'All thinking men are atheists';
print_r(str_word_count($tekst10, 1));		//Array ( [0] => All [1] => thinking [2] => men [3] => are [4] => atheists )

echo "<br>";

$tekst11 = 'All thinking men are atheists';
$sona = str_word_count($tekst11, 1);
echo $sona[2];

echo "<br>";

echo "<h2>Teksti otsimine</h2>";
echo "<br>";
$tekst12 = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst12, $otsitav, 0);	//4
echo $leia_tekstist;

echo "<br>";

echo "<h2>Teksti asendamine</h2>";
echo "<br>";
$tekst13 = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst13, $asendus, $otsitav_algus, $otsitav_pikkus);

echo "<br>";

echo "<h2>Mõistatus - ARVA ÄRA EESTI LINNANIMI</h2>";
//eesmärk on ära arvata, millist eesti linna on kirjeldatud
// kirjuta abiks 5-6 tekstipõhist funktsiooni ehk vihjet
// mis aitavad samm sammult lähemale jõuda õigele linnanimele
// funktsioonid on näiteks selliseid - esimene täht on .. jne
echo "<br>";
$linn="Kärdla";
echo "<ol><li>Linn algab ".substr($linn, 0, 1)." tähega</li></ol>";
echo "<br>";
echo "<li>Linna nimel on ".mb_strlen($linn, 'utf8')." tähte</li>";
echo "<br>";
echo "<li>Linna nime viimased kaks tähte on ".substr($linn, 5, 6)."</li>";
echo "<br>";
?>

<form action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linna nimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">

</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="Kärdla"){
        echo $_REQUEST["linn"]." on Õige!";
    } else{
        echo$_REQUEST["linn"]." on Vale!";
    }
}
