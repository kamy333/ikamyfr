<?php

/** @noinspection PhpExpressionResultUnusedInspection */
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_URL') ? null : define("SITE_URL", "https://" . $_SERVER['SERVER_NAME']);
defined('SITE_ROOT') ? null : define('SITE_ROOT', realpath(dirname(dirname(__FILE__)) . DS . ".." . DS));

defined('MY_URL_PUBLIC') ? null : define('MY_URL_PUBLIC', SITE_URL . '/public/');
defined('MY_URL_ADMIN') ? null : define('MY_URL_ADMIN', MY_URL_PUBLIC . 'admin/');
defined('MY_URL_ADMIN_PAGE') ? null : define('MY_URL_ADMIN_PAGE', MY_URL_ADMIN . 'pages/');


//----------------------------------------DELETE-------------------------------------------
$server_name = $_SERVER['SERVER_NAME'];
$server_local = "localhost";
$server_phpstorm = "PhpStorm 2016.1.2";

if ($server_name === $server_local || $server_name === $server_phpstorm) {

    defined('SESSION_PATH') ? null : define('SESSION_PATH', 'C:' . DS . 'xampp' . DS . 'tmp' . DS . 'session_kamy');

} else {

    defined('SESSION_PATH') ? null : define('SESSION_PATH', DS . 'home' . DS . 'client' . DS . '3c5d0df3cf984761da29624d40680837' . DS . 'tmp');
}

//----------------------------------------DELETE----------------------------------

$mySecondFolder = "public";

defined('BR') ? null : define('BR', '<br>');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'inc');

defined('LIB_PATH_CLASSES') ? null : define('LIB_PATH_CLASSES', LIB_PATH . DS . 'classes');
defined('LIB_PATH_CONFIG') ? null : define('LIB_PATH_CONFIG', LIB_PATH . DS . 'config');
defined('LIB_PATH_FUNCTIONS') ? null : define('LIB_PATH_FUNCTIONS', LIB_PATH . DS . 'functions');
defined('LIB_PATH_TRANSPORT') ? null : define('LIB_PATH_TRANSPORT', LIB_PATH . DS . 'transport');
defined('LIB_PATH_DATABASE') ? null : define('LIB_PATH_DATABASE', LIB_PATH . DS . 'database');


defined('LIB_PATH_VENDOR') ? null : define('LIB_PATH_VENDOR', SITE_ROOT . DS . 'vendor');

defined('PATH_UPLOAD') ? null : define('PATH_UPLOAD', SITE_ROOT . DS . 'uploads');
defined('PATH_USER_IMG') ? null : define('PATH_USER_IMG', SITE_ROOT . DS . 'user_img');
defined('PATH_ASSETS') ? null : define('PATH_ASSETS', SITE_ROOT . DS . $mySecondFolder . DS . 'assets');

defined('PATH_LAYOUTS') ? null : define('PATH_LAYOUTS', PATH_ASSETS . DS . 'layouts');
defined('PATH_LAYOUTS_OTHERS') ? null : define('PATH_LAYOUTS_OTHERS', PATH_LAYOUTS . DS . 'others');


defined('HEADER') ? null : define('HEADER', PATH_LAYOUTS . DS . 'header.php');
defined('FOOTER') ? null : define('FOOTER', PATH_LAYOUTS . DS . 'footer.php');
defined('NAV') ? null : define('NAV', PATH_LAYOUTS . DS . 'nav.php');


defined('HEADER_LOGIN') ? null : define('HEADER_LOGIN', PATH_LAYOUTS_OTHERS . DS . 'header_login.php');
defined('HEADER_REGISTER') ? null : define('HEADER_REGISTER', PATH_LAYOUTS_OTHERS . DS . 'header_register.php');
defined('FOOTER_LOGIN_REGISTER') ? null : define('FOOTER_LOGIN_REGISTER', PATH_LAYOUTS_OTHERS . DS . 'footer_login_register.php');




//echo HEADER;


//defined('CONFIG_HEADER') ? null : define('CONFIG_HEADER', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'config_header.php');
//defined('HEADER') ? null : define('HEADER', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'header.php');
//defined('HEADER_PUBLIC') ? null : define('HEADER_PUBLIC', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'header_public.php');
//defined('HEADER_CANVAS') ? null : define('HEADER_CANVAS', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'header_canvas.php');
//
//defined('FOOTER') ? null : define('FOOTER', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'footer.php');
//defined('FOOTER_PUBLIC') ? null : define('FOOTER_PUBLIC', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'footer_public.php');
//
//defined('NAV') ? null : define('NAV', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'nav.php');
//defined('NAV_PUBLIC') ? null : define('NAV_PUBLIC', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'nav_public.php');
//defined('NAV_CANVAS') ? null : define('NAV_CANVAS', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'nav_canvas.php');
//
//defined('SIDEBAR') ? null : define('SIDEBAR', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'sidebar.php');
//defined('SIDEBAR_CANVAS') ? null : define('SIDEBAR_CANVAS', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'sidebar_canvas.php');
//defined('TABLE_MANAGE') ? null : define('TABLE_MANAGE', SITE_ROOT . DS . $mySecondFolder . DS . 'layouts' . DS . 'table_manage.php');


//include(SITE_ROOT.DS.$mySecondFolder.DS.'layouts'.DS."footer.php");


$logo = "<span style='color: #0016b0;font-family: Lucida Console, Monaco, monospace, Monaco, monospace'><b>Transmed</b></span>";
defined('LOGO') ? null : define("LOGO", $logo);
$title = "Transmed";

// load config file first
require_once(LIB_PATH_CONFIG . DS . 'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH_FUNCTIONS . DS . 'functions.php');
require_once(LIB_PATH_FUNCTIONS . DS . 'functions2.php');
require_once(LIB_PATH_FUNCTIONS . DS . 'functions3.php');
require_once(LIB_PATH_FUNCTIONS . DS . 'functions4.php');
// load core objects
require_once(LIB_PATH_CLASSES . DS . 'Session.php');

//put functions
require_once(LIB_PATH_FUNCTIONS . DS . "security_csrf_token_functions.php");
require_once(LIB_PATH_FUNCTIONS . DS . "security_request_forgery_functions.php");
require_once(LIB_PATH_FUNCTIONS . DS . "security_mcrypt_functions.php");
require_once(LIB_PATH_FUNCTIONS . DS . "security_allowed_get.php");
require_once(LIB_PATH_FUNCTIONS . DS . "reset_token_functions.php");

require LIB_PATH_VENDOR . DS . 'autoload.php';
require_once(LIB_PATH_CLASSES . DS . 'MyClasses.php');

try {
    $use_database_mysqli = true;
    $is_database_mysqli_object = true;
    if ($use_database_mysqli) {
        if ($is_database_mysqli_object) {
            require_once(LIB_PATH_DATABASE . DS . 'MySQLDatabaseMySQLIObject.php');
        } else {
            require_once(LIB_PATH_DATABASE . DS . 'MySQLDatabaseMySQLI.php');
        }
    } else {
        require_once(LIB_PATH_DATABASE . DS . 'MySQLDatabasePDO.php');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

require_once(LIB_PATH_DATABASE . DS . 'DatabaseObject.php');

$arrayClasses = ['User', 'UserType', 'Pagination', 'Paginator', 'Form', 'FormValidation', 'Table', 'Nav', 'Modal', 'Upload', 'SetUp', 'FailedLogin', 'BlacklistIp', 'BrowserDetect', 'ToDoList', 'Note', 'Notification', 'Calendar','Employee'];

foreach ($arrayClasses as $item) {
    if (is_file(LIB_PATH_CLASSES . DS . $item . '.php')) {
        require_once(LIB_PATH_CLASSES . DS . $item . '.php');
    } else {
        echo "<br>{$item}.php not ok<br>";
        die("<br>{$item}.php not ok<br>");
    }
}


$arrayTransport = ['Client', 'Course', 'Chauffeur', 'TransportChauffeur', 'TransportClient', 'TransportType', 'TransportProgramming', 'TransportProgrammingModel'];

foreach ($arrayTransport as $item) if (is_file(LIB_PATH_TRANSPORT . DS . $item . '.php')) {
    require_once(LIB_PATH_TRANSPORT . DS . $item . '.php');
} else {
    echo "<br>{$item}.php not ok<br>";
    die("<br>{$item}.php not ok<br>");
}

unset($arrayClasses);
unset($arrayTransport);





//require_once(LIB_PATH . DS . 'phpmailer' . DS . 'class.phpmailer.php');
//require_once(LIB_PATH . DS . 'phpmailer' . DS . 'class.smtp.php');
//require_once(LIB_PATH . DS . 'phpmailer' . DS . 'language' . DS . 'phpmailer.lang-am.php');
//require_once(LIB_PATH . DS . 'MyPHPMailer.php')


//require_once(LIB_PATH . DS . 'Project.php');
//require_once(LIB_PATH . DS . 'Category1.php');
//require_once(LIB_PATH . DS . 'Category2.php');
//require_once(LIB_PATH . DS . 'Category.php');

//return;
//require_once(LIB_PATH . DS . 'InvoiceActual.php');
//require_once(LIB_PATH . DS . 'InvoiceSend.php');
//require_once(LIB_PATH . DS . 'InvoiceEstimate.php');
//require_once(LIB_PATH . DS . 'Links.php');
//require_once(LIB_PATH . DS . 'LinksCategory.php');
//require_once(LIB_PATH . DS . 'HeurePresence.php');

//require_once(LIB_PATH . DS . 'MyCigarette.php');
//require_once(LIB_PATH . DS . 'MyCigaretteByPeriod.php');
//require_once(LIB_PATH . DS . 'Currency.php');
//require_once(LIB_PATH . DS . 'MyExpensePerson.php');


//require_once(LIB_PATH . DS . 'MyExpenseType.php');
//require_once(LIB_PATH . DS . 'MyHouseExpenseType.php');
//require_once(LIB_PATH . DS . 'MyExpense.php');
//require_once(LIB_PATH . DS . 'MyLoan.php');
//require_once(LIB_PATH . DS . 'MyHouseExpense.php');
//require_once(LIB_PATH . DS . 'Chat.php');
//require_once(LIB_PATH . DS . 'ChatFriend.php');
//require_once(LIB_PATH . DS . 'ChatFriendDjamila.php');
//require_once(LIB_PATH . DS . 'Article.php');
//require_once(LIB_PATH . DS . 'ArticleSubject.php');
//require_once(LIB_PATH . DS . 'Book.php');
//require_once(LIB_PATH . DS . 'BookCategory.php');

//require_once(LIB_PATH . DS . 'Photo.php');
//require_once(LIB_PATH . DS . 'Comment.php');


//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModel.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelVisibleNo.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelVisibleYes.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelPivot.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelPivotNo.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelPivotYes.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportSummaryCourseDateProgram.php');
//require_once(LIB_PATH . DS . 'transport' . DS . 'ViewTransportModelByChauffeur.php');

