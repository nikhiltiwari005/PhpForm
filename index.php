<?php
session_start();

if (isset($_POST['submit'])) {

	if (isset($_POST['name']) && $_POST['name'] != '') {

		$alert = ['primary', 'info', 'secondary', 'success'];
		shuffle($alert);

		$_SESSION['action'] = '<span class="alert alert-'.$alert[0].'"> Hey, '.$_POST['name'].' </span>';

	}else{

		$alert = ['warning', 'danger'];
		shuffle($alert);

		$_SESSION['action'] = '<span class="alert alert-'.$alert[0].'"> No Name Recived </span>';
	}

	header('Location: .');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prevent Form Resubmitting And Flashing Message Like Laravel In Core php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<div class="header pb-4 pt-4">
			<h1>Prevent Form Resubmitting And Flashing Message</h1>
		</div>
		<div class="lead pb-4 pt-4">
			<?=$_SESSION['action']?>
		</div>
		<div class="w-25">
			<form method="POST" autocomplete="off">
				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="name" autofocus>
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-info">
			</form>
		</div>
	</main>
	<?php unset($_SESSION['action']) ?>
</body>
</html>