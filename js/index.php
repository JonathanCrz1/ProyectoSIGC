<?php

	session_start();

  	require 'admin/db.php';
  	require 'views/index.view.php';


  if (isset($_SESSION['user_id'])) {
    header('Location:home.php');
  }

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

      if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    	$_SESSION['user_id'] = $results['id'];
        header('Location:home.php');
    } else {
      $message = 'Sorry, those credentials do not match';
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