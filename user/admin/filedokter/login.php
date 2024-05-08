<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php
if(isset($_POST["submit"])){
    require_once "dbkoneksi.php";

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST["email"], $_POST["password"],
    ]);

    $count = $user->rowCount(); //untuk memastikan user tersedia atau tidak

    if($count > 0){
        session_start();

        $_SESSION["user"] = $user->fetch();
        echo "<script>window.location='index.php'<script>";
    }else { //jika login gagal
        echo "<script>window.location='login.php'<script>";
    }
}
?>

<body>
    <div>
        <form action="" method="POST">
            <div>
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>