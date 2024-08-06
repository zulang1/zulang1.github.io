<?php
$filename = 'count.txt';

if (file_exists($filename)) {
    $count = intval(file_get_contents($filename));
} else {
    $count = 0;
}

// Increment the count
$count++;

// Save the updated count
file_put_contents($filename, $count);

// Send a response (optional)
echo json_encode(['status' => 'success', 'count' => $count]);
?>
