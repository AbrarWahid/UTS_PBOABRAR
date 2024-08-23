<?php
// Inisialisasi session
session_start();

// Mengecek apakah user sudah login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Library Bootstrapnya Jadi hancur jadinya pakai cdn -->
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Kontak</title>
</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light'>
        <div class="container">
            <a href="index.php" class="navbar-brand">UTS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pt-2 pb-2">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-light">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="kontak.php" class="nav-link text-light">Kontak</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="logout.php" class="nav-link text-light">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <h1 class="display-4 text-center">Kontak Saya</h1>
            <p class="lead text-center">Jika Anda ingin menghubungi saya, silakan gunakan formulir di bawah ini.</p>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="send_message.php" method="post">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; <?php echo date("Y"); ?> Portofolio Saya. Semua hak cipta dilindungi.</p>
    </footer>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan yang terakhir Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
