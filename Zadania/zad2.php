<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="kwota" value="kwota"></input>
</form>


<?php
    if(isset($_GET['kwota']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2'];

        echo $liczba1*$liczba2/100;
    }

?>