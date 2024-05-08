<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        background-color: #f8f9fa;
        padding-top: 40px;
    }
    .login-form {
        width: 340px;
        margin: 0 auto;
        padding: 30px;
        border: 1px solid #ced4da;
        background-color: #fff;
        border-radius: 10px; /* Meningkatkan border-radius untuk tampilan yang lebih lembut */
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1); /* Meningkatkan bayangan */
    }
    /* Tambahkan gaya untuk memperbesar halaman dan posisikan ke tengah */
    html, body {
        height: 100%;
    }
    body {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form-group {
        margin-bottom: 20px; /* Menambahkan ruang antara setiap form group */
    }
    .btn-primary {
        background-color: #007bff; /* Warna biru yang lebih terang */
        border-color: #007bff; /* Warna border yang sesuai */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Warna biru yang lebih gelap saat hover */
        border-color: #0056b3; /* Warna border yang sesuai saat hover */
    }
    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); /* Efek focus yang lebih menonjol */
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center mb-4">Login Form</h2>
                    <form action="login_process.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
