<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}


require '../function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;

            header("Location: admin.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- <h1>Halaman Login</h1> -->

    <!-- <form action="" method="post">

        <ul>
            <li>
                <label for="username"> username : </label>
                <input type="text" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="password"> Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>

</body>

</html> -->

    <!-- == -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Login</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="container">
            <div class="login form">
                <header>Form Login</header>
                <form action="" method="post">
                    <input type="text" name="username" id="username" placeholder="Masukkan Email">
                    <input type="password" name="password" id="password" placeholder="Masukkan Password">
                    <?php if (isset($error)): ?>
                        <div class="error">
                            <p>username/password salah</p>
                        </div>
                    <?php endif; ?>
                    <input type="submit" name="login" value="login" class="button">
                </form>
            </div>
        </div>
    </body>

    </html>