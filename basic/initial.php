<?php
declare(strict_types=1);

session_name('csrf-test-session');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>initial</title>
</head>
<body>
<h1>input</h1>
<form method="post" action="input.php" name="initform">
    <input type="hidden" name="init" value="1"/>
    <input type="submit" />
</form>

<script>
    document.initform.submit();
</script>
</body>
</html>
