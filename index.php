<?php
session_start();


if ($_SESSION['name'] == "") {
    header('Location:login.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <p>
        Welcome <b> <?php echo $_SESSION['name']; ?> </b> for KIEP-SKIES program at Mama Ngina University college
    </p>
    <p><a href="logout.php">logout</a></p>
</body>

</html>