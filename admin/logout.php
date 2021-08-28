<?php
session_start();
$_SESSION['alogin']=="";
session_unset();

$_SESSION['errmsg']="You have been successfully logged out";
?>
<script language="javascript">
document.location="index.php";
</script>
