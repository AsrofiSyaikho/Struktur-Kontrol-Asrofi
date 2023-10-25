<?php
$bakso = 10000;
$esteh = 5000;
$uangawal = 30000;

echo "Saya ingin Membeli Bakso Seharga Rp. $bakso , Sedangkan saya memiliki Uang sebanyak Rp. $uangawal<br>";
if ($uangawal >= $bakso) {
    $uangawal -= $bakso;
echo "Saya Membeli Bakso seharga Rp. $bakso , Sehingga uang saya tersisa Rp. $uangawal <br>";
}
else 
echo "Uang anda tidak cukup untuk membeli Bakso <br>";


echo "Saya ingin Membeli Es Teh Seharga Rp. $esteh <br>";
if ($uangawal >= 20000) {
$uangawal -= $esteh;
echo "Saya Membeli 2 Es Teh, Uang saya tersisa sebanyak Rp. $uangawal";
}
elseif ($uangawal >= $esteh) {
$uangawal -= $esteh;
echo "Uang saya tersisa sebanyak Rp. $uangawal Dikarenakan membeli Es Teh juga";
}
else
echo "Uang saya tidak cukup untuk membeli es teh <br>";


?>