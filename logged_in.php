<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Magebit homework</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
</head>
<body>
    <div class="wrapper">
        <?php if (isset($_SESSION['success'])): ?>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['email'])): ?>
            <p>Welcome, <?php echo $_SESSION['email']; ?></p>
            <p><a href="logged_in.php?logout='1">Logout</a> </p>
        <?php endif; ?>
    </div>
</body>
</html>