<?php
declare(strict_types=1);
session_name('csrf-test-session2');
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>input</title>
</head>
<body>
<h1>input</h1>
<form method="post" action="confirm.php">
    <label>
        <input type="text" name="name" />
    </label>
    <input type="submit" />
</form>

</body>
</html>
