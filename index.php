<!-- penerapan login dengan session dan cookie -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Session</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php
    date_default_timezone_set('Asia/Jakarta'); // Set timezone ke UTC+7
    session_start();

    // Proses login
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        // Hanya username dan password 'admin' yang valid
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = [
                'username' => $username
            ];
            setcookie('username', $username, time() + 60, '/'); // Cookie berlaku 60 detik
            header("Location: index.php");
            exit;
        } else {
            $error = "Username atau Password salah!";
        }
    }

    // Proses logout
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit;
    }

    // Ambil value cookie untuk field username
    $cookie_username = $_COOKIE['username'] ?? '';
    ?>

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="w-100" style="max-width: 400px;">
            <div class="text-center mb-3">
                <small class="text-muted">
                    Waktu Server (WIB): <?php echo date('Y-m-d H:i:s'); ?>
                </small>
            </div>
        <?php if (isset($_SESSION['user'])): ?>
            <div class="card shadow">
                <div class="card-body text-center">
                    <h1 class="h4 mb-3">Selamat datang, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</h1>
                    <a href="index.php?logout=1" class="btn btn-danger">Logout</a>
                </div>
            </div>
        <?php else: ?>
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="h5 mb-4 text-center">Login</h2>
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form action="index.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo htmlspecialchars($cookie_username); ?>">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>