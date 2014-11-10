<html>
<head>
<title>my information</title>
</head>
<body>
<?php
$stop = 10;
for ($i = 0; $i < $stop; $i++){
echo $i;
echo " - ";
//test even
if ($i % 2 == 0){
echo " even";
} else {
echo " odd";
}
//test prime
$counter = 1;
while ($counter < $i){
$counter += 1;
if ($counter == $i){
echo " Prime";
}
if ($i % $counter == 0 and $i !== $counter){
echo " Not Prime";
$counter = $i;
}
}
echo "<br>";
}
?>
</body>
</html>
