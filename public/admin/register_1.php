
<?php require_once HEADER_REGISTER; ?>

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
