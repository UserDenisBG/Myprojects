<?php

if(isset($_POST['year'])){
    $Year = ($_POST['year']);
    $TheYearNow = date('Y');

    $age = $TheYearNow - $Year; 

    echo "Ти си на $age години.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Age</title>
</head>
<body>

<form method="post" action="">
    Рожденна година:<input type="number" name="year">
    <input type="submit" value="submit">
</form>

</body>
</html>

