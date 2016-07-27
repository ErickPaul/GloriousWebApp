<?php
session_start();
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
header("location: admin.php");
exit();
}
session_destroy();
unset($_SESSION['sess_user_id']);
?>	