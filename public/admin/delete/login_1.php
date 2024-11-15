<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Transmed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            overflow-y: auto; /* Enable scrolling */
        }
        .login-container {
            max-width: 600px;
            width: 100%;
            padding: 4rem;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 2rem 0; /* Add margin to allow for vertical centering */
        }
        .transmed-logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 2rem;
        }
        .form-label {
            font-size: 1.25rem;
        }
        .form-control {
            font-size: 1.25rem;
            padding: 1rem;
        }
        .btn-primary {
            font-size: 1.5rem;
            padding: 1rem;
        }
        .links {
            text-align: center;
            margin-top: 2rem;
        }
        .link-item {
            font-size: 1.25rem;
            color: #6c757d;
            text-decoration: none;
            margin: 0 1rem;
        }
        .link-item:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="transmed-logo">Login - Transmed</div>
    <form>
        <div class="mb-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control form-control-lg" id="username" placeholder="Enter your username" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" required>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg w-100">Sign in</button>
    </form>
    <div class="links">
        <a href="../index.php" class="link-item">Back to Public Page</a>
        <a href="/register.php" class="link-item">Register</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
