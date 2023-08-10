<!DOCTYPE html>
<html>
<head>
    <title>!</title>
</head>
<body>
<form>
    <input type="number" name="factoriel">
    <input type="submit" value="submit">
</form>

</body>
</html>

<html>
<?php

if(isset($_GET["factoriel"])) {
    $inputNumber = $_GET["factoriel"];

    factoriel($inputNumber);
}

function factoriel($number){
    if($number == 0 || $number == 1){
        echo "Факториелът на $number e: 1";
    } else {
        $result = 1;
        for($i = 1; $i <= $number; $i++){
            $result *= $i;
        }
        echo "Факториелът на $number e: $result";
    }
}

?>
