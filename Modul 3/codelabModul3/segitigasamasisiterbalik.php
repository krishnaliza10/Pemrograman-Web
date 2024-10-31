<?php
$height = 6; // Adjust the height of the triangle here

for ($i = $height; $i >= 1; $i--) {
    // Print spaces
    for ($j = $height; $j > $i; $j--) {
        echo " ";
    }
    // Print asterisks
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}
?>
