<?php session_start(); /* Starts the session */
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit;
}
?>
    <html>

    <head>
        <title>Homepage</title>
    </head>

    <body>
        Hello
        <?php 
    echo $_SESSION['username'];
        ?>,
            <br> You are currently logged in.
            <br>
            <iframe style="" src=""></iframe>
            <br>
            <form method="post">
                <textarea style="resize: none; outline: none;" name="urlfield" placeholder="Enter Url Here" cols="30" rows="5"></textarea>
                <br>
                <input name="Submit" type="submit" value="Load Url">
            </form>
            <br>
            <span style="position: fixed; bottom: 1em;">
            <a href="logout.php">Click here</a> to Logout.
        </span>
    </body>

    </html>