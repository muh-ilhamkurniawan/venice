<!DOCTYPE html>
<html lang="en">
<head>
    <title>VENICE - Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="content" class="p-4 p-md-5 pt-5 w-50 mx-auto">
        <div class="text-center">
            <h2 class="mb-4 mx-auto">Registrasi</h2>
        </div>
        <form action="proses_registrasi.php" method="post">
            <div class="form-group">
                <label for="exampleInputName">Nama</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name" name="nama" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" required>
            </div>
            <p>Sudah punya akun? <a href="index.php">Login</a></p>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
