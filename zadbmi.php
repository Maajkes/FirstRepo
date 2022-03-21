<form method="get">
<input name="waga"></input>
<input name="wzrost"></input>
<input type="submit" name="oblicz"></input>
</form>

<?php
if(isset($_GET['oblicz BMI']))
{
    $licz1= $_GET['waga'];
    $licz2= $_GET['wzrost'];
    $BMI= $licz1/$licz2*($licz2^2);
    $wynik= (int)$BMI;
    echo "Twoje BMI to $wynik";

if($wynik <18){
    echo "Masz niedowage";
}
if($wynik >18){
    echo "Masz git wage";

}
if($wynik >29){
    echo "Oj grubasku";

}
}
?>