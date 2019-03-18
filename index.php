<?
include 'includes/config.php';
include 'includes/functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	switch($_POST['type']){
		case 'Save':
			include 'new.php';
			break;
		case 'Update':
			include 'update.php';
			break;
		case 'Delete':
			include 'delete.php';
			break;
		default:
			break;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<script src="scripts/script.js"></script>
</head>
<body>
<div class="message warning hidden" id="nameMessage">
	Name must include at least 2 chars using letters and numbers.
</div>

<div class="message warning hidden" id="phoneMessage">
	Phone must include at least 10 chars using only numbers.
</div>
<?
include 'list.php';
?>
<button onclick="openForm(); return false;">New</button>
<form id="newContact" class="hidden" method="post" onsubmit="return validate(this);">
	<input type="text" name="name" id="name" placeholder="name" required>
	<input type="text" name="phone" id="phone" placeholder="phone" required>
	<input type="submit" name="type" value="Save">
</form>
</body>
</html>