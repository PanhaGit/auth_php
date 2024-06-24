<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-card card shadow-sm">
            <div class="card-body">
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <h2>Login</h2>
                        <label for="loginEmail" class="form-label">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="loginEmail" name="email" placeholder="name@example.com" required />
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Enter your password" required />
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </button>
                </form>

            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-card card shadow-sm py-5">
            <form method="POST" action="sign_in.php">
                <div class="mb-3">
                    <h2>Sign in</h2>
                    <label for="loginEmail" class="form-label">Email:</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="loginEmail" name="email" placeholder="name@example.com" required />
                    </div>
                </div>


                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password:</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Enter your password" required />
                    </div>
                </div>


                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Sign in
                </button>
            </form>

        </div>
    </div>
</body>

</html>