<?php
	$js = 'library/javascript';
	$styles = 'library/styles';
	$zTabs = 'library/javascript/zTabs';
	
	require('library/includes/lessc.inc.php');
	$less = new lessc();
	$less->checkedCompile($styles.'/full_screen.less',$styles.'/full_screen.css');
	$less->checkedCompile($zTabs.'/'.$styles.'/zTabs.less',$zTabs.'/'.$styles.'/zTabs.css');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kate Green</title>
	<link href='http://fonts.googleapis.com/css?family=Simonetta:400,900,400italic,900italic' rel='stylesheet' />
	<link rel="stylesheet" href="<?php echo $styles; ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo $styles; ?>/jquery.snippet.min.css" />
	<link rel="stylesheet" href="<?php echo $zTabs; ?>/<?php echo $styles; ?>/zTabs.css" />
	<link rel="stylesheet" href="<?php echo $styles; ?>/full_screen.css" media="all" />
	<!--[if IE 8]><link rel="stylesheet" href="<?php echo $zTabs; ?>/<?php echo $styles; ?>/zTabsIE8.css" type="text/css" media="screen"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="<?php echo $zTabs; ?>/<?php echo $styles; ?>/zTabsIE7.css" type="text/css" media="screen"><![endif]-->
<!--[if lte IE 6]> <link rel='stylesheet' rev='stylesheet' href='<?php echo $zTabs; ?>/<?php echo $styles; ?>/zTabsIE6.css' type='text/css' charset="utf-8" media='screen' /> <![endif]-->
	
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.min.js"></script>
	<script src="<?php echo $js; ?>/jquery.snippet.min.js"></script>
	<script src="<?php echo $zTabs; ?>/<?php echo $js; ?>/jquery.ztabs.js"></script>
	
	<script>
		$(document).ready(function() {
			var page = '<?php echo $page; ?>';
			$('#nav li').each(function() {
				if ($(this).attr('id') == page) {
					$(this).addClass('current');
				}
			});

			$('#mainTabs').zTabs({
				contentdivid: 'main',
				subrowsdivid: 'subRows',
				localstorage: 'ignore'
			});
		});
	</script>
</head>

<body>

<div id="pageWrapper">
	<div id="header">
		<div id="signature"></div>
		<h1>Kathryn Green</h1>
		<div id="contact_info">
			<div class="email"><a href="mailto:kate@kategreen.us">kate@kategreen.us</a></div>
		</div>
	</div>
	
	<div id="nav">
		<ul id="mainTabs">
			<li id="home"><a href="#">Home</a></li>
			<li id="running"><a href="#running_subrow">Running</a></li>
			<li id="portfolio"><a href="#portfolio_subrow">Portfolio</a></li>
		</ul>

		<div id="subRows">
			<ul id="running_subrow">
				<li id="race_tracker"><a href="#race_tracker_subrow">Race Tracker</a></li>
				<li id="something_else"><a href="#">Something Else</a></li>
			</ul>

			<ul id="portfolio_subrow">
				<li id="portfolio_home"><a href="#">Home</a></li>
				<li id="resume"><a href="#">Resume</a></li>
			</ul>

			<ul id="race_tracker_subrow">
				<li id="race_tracker_detail"><a href="#">Detail</a></li>
				<li id="race_tracker_whatever"><a href="#">Whatever</a></li>
			</ul>
		</div>
	</div>

	<div id="main">
		<h2>Main Content</h2>
	</div>

	<div id="sidebar">
		<h2>Sidebar</h2>
	</div>
	
	<div id="footer"></div>
</div>

</body>
</html>