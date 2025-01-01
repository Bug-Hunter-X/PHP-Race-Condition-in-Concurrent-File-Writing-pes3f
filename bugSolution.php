<?php
$filename = 'counter.txt';

// Acquire an exclusive lock on the file
if (flock(fopen($filename, 'c+'), LOCK_EX)) {
    // Read the current counter value
    $currentCount = file_exists($filename) ? (int)file_get_contents($filename) : 0;

    // Increment the counter
    $newCount = $currentCount + 1;

    // Write the updated counter value
    file_put_contents($filename, $newCount);

    // Release the lock
flock(fopen($filename, 'c+'), LOCK_UN);
    echo "Counter updated successfully to: " . $newCount . "\n";
} else {
    echo "Could not acquire lock on file.\n";
}
?> 