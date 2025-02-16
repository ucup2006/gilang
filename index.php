<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UKK KASIR - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="row g-0">
                    <!-- Bagian Kiri - Form Login -->
                    <div class="col-md-6 p-5">
                        <h3 class="text-center text-success fw-bold"><i class="fas fa-store"></i> UKK Kasir</h3>
                        <p class="text-center text-muted">Silahkan masukkan username dan password</p>

                        <?php 
                        if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"){
                            echo "<div class='alert alert-danger text-center' role='alert'>
                                    <i class='fas fa-exclamation-circle'></i> Username atau password salah!
                                  </div>";
                        }
                        ?>

                        <form method="post" action="cek_login.php">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
                        </form>
                    </div>

                    <!-- Bagian Kanan - Gambar -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                        <img src="assets/login.png" class="img-fluid p-3" alt="Login Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</body>
</html>
