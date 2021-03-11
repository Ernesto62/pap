<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fa/css/all.css">
	<script type="text/javascript" src="fa/js/all.js"></script>
	 <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<h1>Login</h1>
<form method="post" action="processa_login.php">
	<label>Nome do Utilizador</label><input type="text" name="nome"  required><br>
	<label>Email    </label><input type="text" name="email"  required><br>
	<label>Palavra Passe</label><input type="text" name="palavra_passe"required><br>
	<input type="submit" name="login">
	<br>
	<br>
	
	

</form>
</body>
</html>