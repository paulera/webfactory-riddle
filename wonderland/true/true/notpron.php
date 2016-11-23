<?php

	$magickey = "pleasehiremeguys";

	$solved = 0;
	$result = "";

	if (isset($_POST["thekey"])) {
		if (strtolower($_POST["thekey"]) == $magickey) {
			$solved = 1;
		} else {
			$result = "No, you are not ...";
		}
	}
?>

<html>

	<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCJQS7');</script>
<!-- End Google Tag Manager -->

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script>
		$(document).ready(function() {
			$("#result").fadeOut(3000);
		});
		</script>
	
	<style>
		body {
			background-color: #000000;
			color: #ffffff;
		}

		body * {
			font-family: "Courier New";
		}

		.formcontainer {
			text-align: center;
			font-size: 3vw;
			width: 100%;
		}

		.formcontainer * {
			font-size: 2vw;
		}

		#submit {
			cursor: pointer;
			font-weight: bold;
		}

		#quote {

		}

		#author {
			font-weight: 100;
			font-style: italic;
		}

		#phrase {
			font-weight: bold;
		}

		.text-center {
			text-align: center;
		}

		.container {
			font-size: 20px;
			max-width: 1100px;
			margin-left: auto;
			margin-right: auto;
			line-height: 30px;
		}

		a:link, a:visited {
			color: #90ff90;
			text-decoration: none;
		}

		a:hover {
			color: #00ff00;
		}

		.code {
			font-size: 30px;
			color: #9090ff;
		}
		</style>
	</head>

	<body>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCJQS7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<?php if($solved === 1) { ?>

		<title>Congratulations!!!</title>

<br>
<div class="text-center">
	<h1>Yes, you are ready!</h1>
	<h2>We’re happy that you solved our riddle and hope you found it fun!</h2>
	<p>(please don't publish spoilers)</p>
</div>
<br>

<div class="container">
	<p>Webfactory is seeking a Senior Frontend Developer, someone as smart and curious as you!</p>

	<p>Interested? This is what you have to do:</p>

	<ol>
		<li> Check out the job specs at<br><a href='//www.webfactory.ie/blog/senior-front-end-developer' target='_blank'>www.webfactory.ie/blog/senior-front-end-developer</a></li>
		<br>
		<li> Apply by sending your CV to <a href='mailto:hr@webfactory.ie'>hr@webfactory.ie</a>.</li>
		<br>
		<li> Send an email to <a href='mailto:paulo@webfactory.ie?subject=I+solved+your+riddle'>paulo@webfactory.ie</a> with the following in the mail body:</li>
		<br>
		<ul>
			<li>Say you solved the riddle and as proof provide this final code:<br><span class="code">IAMYOURNEWFRONTENDHERO</span></li>
			<li><b>Attach your CV</b> (the same you sent to the HR)</li>
			<li>Then tell us:
				<ul>
					<li>How you solved it? (there is more than one way)</li>
					<li>Was it easy or hard?</li>
					<li>Enjoyable or annoying?</li>
					<li>Which references to other stuff did you find along the way?</li>
					<li>What would you add to make it more interesting?</li>
				</ul>
			</li>
			<li>Not looking for a job? That is OK, but anyways, <a href='mailto:paulo@webfactory.ie?subject=I+solved+your+riddle'>let us know</a> you solved it and your toughts!</li>
		</ul>
	</ol>

	<br>

	<h2>We are looking forward to hearing from you!</h2>
</div>

		<?php } else { ?>

			<title>So close</title>

			<div class="formcontainer">

				<br>

				<div id="quote">
					<span id="phrase">"Every ending leads to a new beginning"</span><br>
					<span id="author">- B. Wayne</span><!-- What else have this man said? -->
				</div>

				<br/><br>
				<form action="" method="POST">
					<!-- Remember: we want someone who is attentive to details -->
					<input type="password" name="thekey" id="password"><br><br>
					<button type="submit" id="submit"> I am ready! </button>
				</form>
				<br>
				<span id="result"><?php echo $result; ?></span>
			</div>

		<?php } ?>
			
	</body>

</html>
