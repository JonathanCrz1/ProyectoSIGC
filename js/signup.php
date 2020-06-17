<?php
	
	require 'views/signup.view.php';
	require 'admin/db.php';

  $message = '';
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['user'])) {
      $sql = "INSERT INTO usuarios (user, email, password) VALUES (:user, :email, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $_POST['user']);
      $stmt->bindParam(':email', $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title></title>
</head>
<body>
	<?php if(!empty($message)): ?>
  		<p> <?= $message ?></p>
	<?php endif; ?>	
</body>
</html>