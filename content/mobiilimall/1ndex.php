<?php include '2pais.php'; ?>

<?php
// Vaikimisi anekdoot 1
$n = isset($_GET['n']) ? intval($_GET['n']) : 1;

// Faili nimi
$fail = "nali" . $n . ".txt";

// Kontrolli, kas fail on olemas
if (file_exists($fail)) {
    $anekdoot = file_get_contents($fail);
    echo "<h2>Anekdoot $n</h2>";
    echo "<p>" . nl2br(htmlspecialchars($anekdoot)) . "</p>";
} else {
    echo "<p>Anekdooti ei leitud!</p>";
}
?>

<?php include '3jals.php'; ?>
