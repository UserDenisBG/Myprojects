<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Temperature</title>
</head>

<body>

<form method="post" action="">
    Температура:<input type="number" name="temperature">
    <input type="submit" value="submit">
</form>

</body>
</html>

<?php

if(isset($_POST['temperature'])){
    $temperature = ($_POST['temperature']);
    
    if($temperature >= -10 && $temperature < 5){
        echo "Сложи си шапка, яке и шал.<br>";
    }
    if($temperature >= 5 && $temperature < 20){
        echo "Сложи си суитчер, дълги панталони и тениска.<br>";
    }
    if($temperature >= 20 && $temperature <= 30){
        echo "Сложи си тениска и къси панталони.<br>";
    }
    if($temperature > 30){
        echo "Не излизай!";
    }
}

?>

