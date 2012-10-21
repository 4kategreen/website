<!DOCTYPE html>
<html>
<head>
	<title>Kate Green</title>
	<link href='http://fonts.googleapis.com/css?family=Simonetta:400,900,400italic,900italic' rel='stylesheet' />
	<link rel="stylesheet" href="http://kategreen.us/javascript/fancyBox/source/jquery.fancybox.css" />
	<link rel="stylesheet" href="http://kategreen.us/styles/jquery.snippet.min.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/ui/1.8.20/jquery-ui.min.js"></script>
	<script src="http://kategreen.us/javascript/fancyBox/source/jquery.fancybox.js"></script>
	<script src="http://kategreen.us/javascript/jquery.snippet.min.js"></script>
	
	<link rel="stylesheet/less" href="http://kategreen.us/styles/screen.less" media="all" />
	<script src="http://kategreen.us/styles/less-1.3.0.min.js"></script>
	
	<script>
		$(document).ready(function() {
			var page = '<?php echo $page; ?>';
			$('#nav li').each(function() {
				if ($(this).attr('id') == page) {
					$(this).addClass('current');
				}
			});
		});
	</script>
</head>

<body>
<div id="header">
	<div id="signature"></div>
	<h1>Kathryn Green</h1>
	<div id="contact_info">
		<div class="email"><a href="mailto:kate@kategreen.us">kate@kategreen.us</a></div>
	</div>
</div>
	
<div id="nav">
	<ul>
		<li id="home"><a href="http://kategreen.us/index.php">Home</a></li>
		<li id="running"><a href="http://kategreen.us/running/">Running</a></li>
		<li id="portfolio"><a href="http://kategreen.us/portfolio/">Portfolio</a></li>
		<li id="resume"><a href="http://kategreen.us/resume.php">Resume</a></li>
	</ul>
</div>

<div id="container">

</div>
<div id="footer"></div>

</body>
</html>