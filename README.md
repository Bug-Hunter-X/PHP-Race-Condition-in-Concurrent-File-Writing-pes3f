# PHP Race Condition in Concurrent File Writing

This repository demonstrates a potential race condition in PHP when multiple processes concurrently write to the same file using `file_put_contents()`.  The race condition can lead to data loss or corruption because the file isn't properly protected from simultaneous access.  The solution showcases how to use file locking to prevent such issues.

## Bug
The `bug.php` file contains the code that exhibits the race condition.  Running this script multiple times concurrently will likely lead to unexpected and inconsistent file contents.

## Solution
The `bugSolution.php` file demonstrates a solution using file locking to prevent the race condition. File locking ensures that only one process can access and modify the file at a time, preventing data corruption.