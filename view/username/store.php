<?php
    require_once("../../controller/usernameController.php");
    $obj =new usernameController();
    $obj-> save($_POST['name']);

?>