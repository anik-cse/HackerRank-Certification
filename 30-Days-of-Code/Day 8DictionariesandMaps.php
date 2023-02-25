<?php
// Read the number of entries in the phone book
$n = intval(trim(fgets(STDIN)));

// Initialize the phone book as an empty associative array
$phoneBook = [];

// Read the phone book entries and store them in the phone book
for ($i = 0; $i < $n; $i++) {
    $entry = trim(fgets(STDIN));
    $parts = explode(' ', $entry);
    $name = $parts[0];
    $phone = $parts[1];
    $phoneBook[$name] = $phone;
}

// Read the queries and process them
while ($query = trim(fgets(STDIN))) {
    if (isset($phoneBook[$query])) {
        // The name is found in the phone book
        echo $query . '=' . $phoneBook[$query] . PHP_EOL;
    } else {
        // The name is not found in the phone book
        echo 'Not found' . PHP_EOL;
    }
}
?>
