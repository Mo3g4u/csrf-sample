<?php
declare(strict_types=1);
session_name('csrf-test-session');
session_start();

if($_SESSION['csrf_token'] !== $_POST['csrf']) {
    exit('csrf token error');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>confirm</h1>

<p><?php echo htmlspecialchars($_POST['name']); ?></p>

<a href="input.php">back</a>

</body>
</html>
