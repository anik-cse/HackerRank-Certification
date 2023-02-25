<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($_fp);

for ($i = 0; $i < $t; $i++) {
    // Read each string
    $s = trim(fgets($_fp));
    
    // Split the string into even and odd characters
    $even_chars = '';
    $odd_chars = '';
    for ($j = 0; $j < strlen($s); $j++) {
        if ($j % 2 == 0) {
            $even_chars .= $s[$j];
        } else {
            $odd_chars .= $s[$j];
        }
    }
    
    // Print the even and odd characters separated by a space
    echo "$even_chars $odd_chars\n";
}
?>
