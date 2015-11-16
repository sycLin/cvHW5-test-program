<!DOCTYPE html>

<html>
<head>
	<title>cvHW5</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="sycLin, StevenLin, Steven, NTU, CSIE">
	<meta name="description" content="Steven's personal website">
	<meta name="author" content="Steven YuChih Lin">
	<!-- import Google Icon Font -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- import materialize.css -->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen, projection" />
	<!-- let browser know website is optimized for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
	.tabs div.indicator {background-color: #aaa;}
	</style>
</head>
<body>
	<div class="container">
		<label><i class="material-icons left">assignment</i>CV HW5</label>
		<h2>Grayscale Morphology</h2>
		<hr>
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#dilation">Dilation</a></li>
					<li class="tab col s3"><a href="#erosion">Erosion</a></li>
					<li class="tab col s3"><a href="#opening">Opening</a></li>
					<li class="tab col s3"><a href="#closing">Closing</a></li>
				</ul>
			</div>
			<!-- Dilation div -->
			<div id="dilation"  class="row">
				<div class="col s12 m6">
					<img class="responsive-img" src="assets/img/Dilation.bmp" alt="dilation image" />
				</div>
				<div class="col s12 m6">
					<h5>Check if we match:</h5>
					<form action="check.php" method="POST" enctype="multipart/form-data">
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file" name="fileToUpload" id="fileToUploadD">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="upload your dilation image">
							</div>
						</div>
						<input type="hidden" name="which" value="dilation" />
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
				</div>
			</div>
			<!-- Erosion div -->
			<div id="erosion"  class="row">
				<div class="col s12 m6">
					<img class="responsive-img" src="assets/img/Erosion.bmp" alt="erosion image" />
				</div>
				<div class="col s12 m6">
					<h5>Check if we match:</h5>
					<form action="check.php" method="POST" enctype="multipart/form-data">
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file" name="fileToUpload" id="fileToUploadE">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="upload your erosion image">
							</div>
						</div>
						<input type="hidden" name="which" value="erosion" />
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
				</div>
			</div>
			<!-- Opening div -->
			<div id="opening"  class="row">
				<div class="col s12 m6">
					<img class="responsive-img" src="assets/img/Opening.bmp" alt="opening image" />
				</div>
				<div class="col s12 m6">
					<h5>Check if we match:</h5>
					<form action="check.php" method="POST" enctype="multipart/form-data">
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file" name="fileToUpload" id="fileToUploadO">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="upload your opening image">
							</div>
						</div>
						<input type="hidden" name="which" value="opening" />
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
				</div>
			</div>
			<!-- Closing div -->
			<div id="closing"  class="row">
				<div class="col s12 m6">
					<img class="responsive-img" src="assets/img/Closing.bmp" alt="closing image" />
				</div>
				<div class="col s12 m6">
					<h5>Check if we match:</h5>
					<form action="check.php" method="POST" enctype="multipart/form-data">
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file" name="fileToUpload" id="fileToUploadC">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="upload your closing image">
							</div>
						</div>
						<input type="hidden" name="which" value="closing" />
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- import jQuery before materialize.js -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script>
	$(document).ready(function() {
		$('.scrollspy').scrollSpy();
	});
	</script>
</body>
</html>

