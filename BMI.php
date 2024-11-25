<?php

$height = isset($_GET['slide2']) ? floatval($_GET['slide2']) : 0;
$weight = isset($_GET['slide1']) ? floatval($_GET['slide1']) : 0;

$heightInMs = $height * 0.3048;

if ($heightInMs > 0 && $weight > 0) {
    $bmi = $weight / ($heightInMs * $heightInMs);

    if ($bmi < 18.5) {
        $message = "$bmi";
        $message2="You are Under Weight";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $message = "$bmi";
        $message2="You have Normal Weight";

    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        $message = "$bmi";
        $message2="You are Over Weight";

    } else {
        $message = "$bmi";
        $message2="You are Obese";

    }
} else {
    $message = "Invalid height or weight.";
    $message2="Invalid  ";

}
echo trim($message)."<br>";
echo ($message2); 
?>



