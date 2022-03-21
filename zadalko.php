<form method="get">
<input name="alk"></input>
Podaj ilosc wypitego alko<br>
<input name="waga"></input>
Podaj wage<br>
<input type="submit" name="oblicz"></input>
</form>
<?php
if (isset($_GET["oblicz"]))
{
    $alk= $_GET['alk'];
    $waga= $_GET['waga'];
    $waga=(int)$waga;

    $wynik = $alk / (0.65 * $waga);
    echo "Tyle masz alko we krwi: $wynik";

}
?>