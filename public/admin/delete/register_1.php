<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Transmed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 600px;
            width: 100%;
            padding: 4rem;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 2rem auto; /* Center horizontally and allow space at the top */
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

<div class="register-container">
    <div class="transmed-logo">Register - Transmed</div>
    <form>
        <div class="mb-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control form-control-lg" id="username" placeholder="Enter your username" required autofocus autocomplete="off">
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-lg" id="password" placeholder="Create a password" required  autocomplete="off">
        </div>
        <div class="mb-4">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control form-control-lg" id="firstName" placeholder="Enter your first name" required>
        </div>
        <div class="mb-4">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Enter your last name" required>
        </div>
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-4">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="tel" class="form-control form-control-lg" id="mobile" placeholder="Enter your mobile number" required>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Register</button>
    </form>
    <div class="links">
        <a href="/login" class="link-item">Already have an account? Sign In</a>
        <a href="/" class="link-item">Back to Public Page</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
