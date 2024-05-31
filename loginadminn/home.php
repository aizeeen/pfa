<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <h1>Marhbe Bik, <?php echo $_SESSION['name']; ?>!</h1>
	 <div class="nav-button">
     <a href="logout.php"><button class="btn white-btn">Logout</button></a>
	 </div>
	 <br>
	 <form action="admin_panel/indexadminpanel.php">
	 
			 <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Espace Admin</button>
			</div>
		</form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>