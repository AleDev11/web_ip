
<?php
    $ip = getenv('REMOTE_ADDR');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperioRP IP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="container">
        <img src="./img/logo-cabeza.png">
        <div class="content">
            <p>Tu IP es</p>
            <h1>IP:<?php echo $ip; ?></h1>
            <!-- <?php echo '<button id="btn-copy" onclick="Copy(\''.$ip.'\')">Copy IP</button>'?> -->
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>