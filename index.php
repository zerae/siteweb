<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>E-mail</label>
     	<input type="text" name="uname" placeholder="E-mail"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Mot de passe"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>