<?php
    if (isset($_POST['submit'])){
        if ($_POST['fname']){
            $fname = $_POST['fname']
        } else {
            $fname = FALSE;
            echo "<p>Please enter a valid First Name.</p>";
        }
        if ($_POST['sname']){
            $sname = $_POST['sname']
        } else {
            $sname = FALSE;
            echo "<p>Please enter a valid Surname Name.</p>";
        }
        if ($_POST['uname']){
            $uname = $_POST['uname']
        } else {
            $uname = FALSE;
            echo "<p>Please enter a valid Username.</p>";
        }
        if ($_POST['email']){
            $email = $_POST['email']
        } else {
            $email = FALSE;
            echo "<p>Please enter a valid Email.</p>";
        }
        if ($_POST['password']){
            $password = $_POST['password']
        } else {
            $password = FALSE;
            echo "<p>Please enter a valid Password.</p>";
        }

        include ("dbconnect.inc.php");
?>