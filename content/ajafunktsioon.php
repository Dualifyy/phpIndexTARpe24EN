<?php
echo "<h1>Ajafunktsioonid</h1>";
echo "Tänane kuupäev ".date("d.m.Y");
//timezone - juhul kui timezone ei ole määratud, siis php
//kasutab aega mis on localhostis
date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezone list europe</a>";
echo "<br>";
echo "time() - aeg sekundites ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<br>";
echo "<pre>
.date('d.m.Y G:i:s', time()) - see on kuupäev ja kellaaeg;
d - ? 01...31
m - 1...12
Y - neljakohaline arv
G - 24h format
i - minutid 0...59
s - sekundid 0...59
</pre>";
echo "<h2>Tehted kuupäevadega</h2>";
echo "+1min= time()+60 = ". date('d.m.Y G:i:s', time()+60);
echo "<br>";
echo "+1tund= time()+60*60 = ". date('d.m.Y G:i:s', time()+60*60);
echo "<br>";
echo "+1päev= time()+60*60*24 = ". date('d.m.Y G:i:s', time()+60*60*24);
echo "<br>";
echo "<h2>Kuupäeva genereerimine</h2>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
$synnipaev=mktime(23,53,48,4,9,2008);

echo "<br>";
echo "Minu sünnipäev ".date("d.m.Y G:i:s", $synnipaev);
echo "<br>";
ECHO "Massiivi abil näidata tänane kuu nimi";
echo "<br>";
$kuud=array(1=>'jaanuar','veebruar','märts','aprill','mai','juuni','juuli','august','september','oktoober','november','detsember');
$paev=date('d');
$aasta=date('Y');
$kuu=$kuud[date('m')];
$mpaev=date('d', $synnipaev);
$maasta=date('Y', $synnipaev);
$mkuu=$kuud[(int)date('m', $synnipaev)];
echo "Tänane kuupäev kuu nimega ".$paev.".".$kuu." ".$aasta."a";
echo "<br>";
echo "Minu sünnipäev:  $mpaev. $mkuu $maasta a.";
echo "<br>";

