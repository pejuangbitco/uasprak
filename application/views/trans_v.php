<!DOCTYPE html>
<html>
<head>
	<title>Translate ke simple past tense</title>
</head>
<body>
	<form action="<?= base_url('translate')?>" method="post">
		<input style="width: 400px;" type="text" name="kata" value="<?php if ($kata) echo $kata; ?>"> <br>
		<input type="submit" name="submit" value="translate">	
	</form>
	

	<?php if ($eng) { echo $eng;?>
	
	<?php } ?>
</body>
</html>