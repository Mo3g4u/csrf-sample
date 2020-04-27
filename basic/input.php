<?php
declare(strict_types=1);
session_name('csrf-test-session');
session_start();

// 暗号学的的に安全なランダムなバイナリを生成し、それを16進数に変換することでASCII文字列に変換します
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);
$_SESSION['csrf_token'] = $csrf_token;
$_SESSION['init'] = $_POST['init'];

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
    <p>token:<?php echo $csrf_token; ?></p>
    <input type="hidden" name="csrf" value="<?php echo $csrf_token; ?>"/>
    <input type="submit" />
</form>

<p>
    <?php
        var_dump($_SESSION);
    ?>
</p>

</body>
</html>
