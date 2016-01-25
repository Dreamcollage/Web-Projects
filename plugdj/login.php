<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plug";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
if(isset($_SESSION['username'])){
	header("location:index.php");
	exit;
}
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = $_POST['Username'];
		
		/* Check Username and Password existence in defined array */		
		if (isset($_POST['Username'])){
			/* Success: Set session variables and redirect to Protected page  */
            echo $_POST['Username'];
			$_SESSION['username'] = $Username;
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>
        <form action="" method="post" name="Login_Form">
            <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
                    <tr>
                        <td colspan="2" align="center" valign="top">
                            <?php if(isset($msg)){echo $msg;}?>
                        </td>
                    </tr>
                        <tr>
                            <td colspan="2" align="left" valign="top">
                                <h3>Login</h3></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input name="Username" type="text" class="Input">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input name="Submit" type="submit" value="Login" class="Button3">
                            </td>
                        </tr>
            </table>
        </form>
    </body>

    </html>