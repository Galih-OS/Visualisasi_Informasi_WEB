<?php 
	session_start();
	session_unset();
	session_destroy();
	require_once('Connections/koneksi.php'); 
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
/*if (!isset($_SESSION)) {
  session_start();
}*/

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

//if (isset($_POST['text'])) {
if($_SERVER['REQUEST_METHOD'] == "POST") 
{
	//echo "MASUK";
  $loginUsername=$_POST['text'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "highcart.php";
  $MM_redirectLoginFailed = "gagal.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  
  $LoginRS__query=sprintf("SELECT username, password FROM login WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) 
  {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    session_start();
	$_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;

	/*echo $_SESSION['MM_Username'];
	echo "<br>";
	echo $_SESSION['MM_UserGroup'];
	echo $loginStrGroup;*/
	
	header("Location: " . $MM_redirectLoginSuccess );

    /*if (isset($_SESSION['PrevUrl']) && false) 
	{
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );*/
  }
  
  else 
  {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
       <title>Signin</title>
	   
	   <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>
  		<!--Java Script-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-1.11.1.js"></script>		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/highcharts.js"></script>
		<script src="js/modules/exporting.js"></script>
		
		
		

<div class="container">

      <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="form-signin" id="form"role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="text" type="text" class="form-control" id="username" placeholder="Username" required autofocus>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	
      </form>

    </div> <!-- /container -->

  </body>
</html>
