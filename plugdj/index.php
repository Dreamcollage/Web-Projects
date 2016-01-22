<?php session_start(); /* Starts the session */
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit;
}
?>
    <html>

    <body>
        Hello
        <?php 
    echo $_SESSION['username'];
        ?>,
            <br> You are currently logged in.
            <br>
            <a href="logout.php">Click here</a> to Logout.
    </body>

    </html>