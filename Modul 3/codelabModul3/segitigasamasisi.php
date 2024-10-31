<?php
$height = 6; // Adjust the height of the triangle here

for ($i = 1; $i <= $height; $i++) {
    // Print spaces
    for ($j = $i; $j < $height; $j++) {
        echo " ";
    }
    // Print asterisks
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}
?>
