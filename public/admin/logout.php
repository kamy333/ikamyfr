<?php require_once('../../inc/config/initialize.php'); ?>
<?php
if (isset($session->user_id)) {
    $found_user = User::find_by_id($session->user_id);

    log_action('Logout', "{$found_user->username} logged out.");
}
$session->logout();
redirect_to("/public/admin/login.php");
?>
