<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<h1><?= $header ?></h1>
<ul>
<?php foreach ($users as $user): ?>
		<li><?= $user; ?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>