<?php
require_once('../../inc/config/initialize.php');
$blacklist_ip = new BlacklistIp();
$blacklist_ip->block_blacklisted_ips();

if ($session->is_logged_in()) {
    redirect_to("index.php");
}

$username = "";
$password = "";
// Remember to give your form's submit tag a name="submit" attribute!


if (request_is_post() && request_is_same_domain()) {

    if (!csrf_token_is_valid() || !csrf_token_is_recent()) {
        $message = "Sorry, request was not valid.";
    } else {
        // CSRF tests passed--form was created by us recently.

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $valid = new FormValidation();

        $valid->validate_presences(['username', 'password']);

        $failed_login = new FailedLogin();
        if (empty($valid->errors)) {

            $throttle_delay = $failed_login->throttle_failed_logins($username);
            if ($throttle_delay > 0) {
                $message = "Too many attempted login. ";
                $message .= "You must wait {$throttle_delay} minutes before you can attempt another login or ask to reset your password.";


            } else {

                // Check database to see if username/password exist.
                $found_user = User::authenticate($username, $password);

                if ($found_user) {

                    if ($found_user->block_user == 0) {
                        $failed_login->clear_failed_logins($username);
                        $session->login($found_user);
                        log_action('Login', "{$found_user->username} logged in from public.");
                        redirect_to("index.php");
                    } else {
                        log_action('Login failed', "{$username} logged in failed because is blocked. (Public)");
                        $message = "Dear {$found_user->nom}, You are blocked until your registration is reviewed. Thank you for your understanding. ";
                        $found_user->blocked_email('Blocked User tried to login. (Public)');

                    }


                } else {
                    log_action('Login failed', "{$username} logged in failed.(Public)");
                    $failed_login->record_failed_login($username);
                    $blacklist_ip->add_ip_to_blacklist();

                    log_action('Login failed', "{$username} logged in failed.(Public)");
                    $message = "Username/password combination incorrect.";


                    //Uncomment if need to reinitialize to 0 blacklist and ip as argument
                    //$blacklist_ip->clear_blacklist_ip($_SERVER['REMOTE_ADDR']);


                }
            }
        } //end throddle

        else {
            //   $message = "Username/password combination incorrect.";
        }

    }


} //end request is post

?>
<?php $layout_context = "admin"; ?>
<?php $active_menu = "admin" ?>
<?php $stylesheets = "" //custom_form  ?>
<?php $javascript = "form_admin" ?>

<?php require_once HEADER_LOGIN; ?>

<body>

<?php echo output_message($message); ?>

<div class="login-container">
    <div class="transmed-logo">Login - Transmed</div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php echo csrf_token_tag(); ?>
        <div class="mb-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg w-100">Sign in</button>
    </form>
    <div class="links">
        <a href="../index.php" class="link-item">&lt;&lt;Back Public</a>
        <a href="register.php" class="link-item">Register</a>
        <p><a href="login_forgot_password_user.php" class="link-item">Forgot password?</a></p>
    </div>
</div>

<?php require_once FOOTER_LOGIN_REGISTER; ?>


