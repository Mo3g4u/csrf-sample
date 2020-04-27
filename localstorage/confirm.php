<?php
declare(strict_types=1);
session_name('csrf-test-session2');
session_start();

$_SESSION['name'] = $_POST['name'];

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

<?php
    var_dump($_SESSION);
?>

</body>
</html>
