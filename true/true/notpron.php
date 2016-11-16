<?php

	$magickey = "pleasehiremeguys";

	$solved = 0;

	if (isset($_POST["thekey"])) {
		if (strtolower($_POST["thekey"]) == $magickey) {
			$solved = 1;
			$result = "
			Yes, you are ready!<br><br>
			We are glad that you solved this<br>
			riddle and hope you enjoyed!<br><br>
			Webfactory is looking for a Senior Frontend Developer, smart and curious as you!
			Send your CV to <a href='mailto:hr@webfactory.ie'>hr@webfactory.ie</a> and don't
			forget to include in the email body a mention that you solved the riddle and this
			final password: IAMYOURNEWFRONTENDHERO

			<!-- this riddle was developed by @paulo_dev -->

			";
		} else {
			$result = "No, you are not...";
		}
	}
?>

<html>

	<head>
	
	<style>
		body {
			background-color: #000000;
			color: #ffffff;
		}
		body * {
			font-family: 'Courier New';
			font-size: 3vw;
		}
		</style>
	</head>

	<body>

		<div style="text-align: center">
			
			<br/>

			<?php if($solved === 1) { ?>
				<?php echo $result; ?>
			<?php } else { ?>
				<form action="" method="POST">
					<input type="text" name="thekey">
					<button type="submit">I am ready</button>
				</form>
				<br>
				<?php echo $result; ?>
			<?php } ?>
			
		</div>

	</body>

</hml>