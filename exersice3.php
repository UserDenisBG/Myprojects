<?php

if(isset($_POST['Palindrom'])){

$input = strtolower($_POST['Palindrom']);
$input2 = strrev($input);


if($input == $input2){
	echo "The word is palindrom";
}else{
	echo "The word is not palindrom";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Palindrom</title>
</head>

<body>


<form method="POST" action="exersice3.php">
	<input type="text" name="Palindrom">
	<input type="submit" value="submit">
</form>


</body>
</html>
