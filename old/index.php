<?php
	$js = 'library/javascript';
	$styles = 'library/styles';
	$images = 'library/images';
	$zTabs = 'library/javascript/zTabs';
	
	require('library/includes/lessc.inc.php');
	$less = new lessc();
	// Setting higher level variables
	$less->setVariables(Array(
		'one-em' => '16px',
		'light-blue' => '#d7eef4',
		'full-width' => '90%'
	));
	try {
		$less->checkedCompile($styles.'/full_screen.less',$styles.'/full_screen.css');
	} catch (Exception $e) {
		echo $e;
	}
	try {
		$result = $less->checkedCompile($zTabs.'/'.$styles.'/zTabs.less',$zTabs.'/'.$styles.'/zTabs.css');
	} catch (Exception $e) {
		echo $e;
	}
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
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.min.js"></script>
	<script src="<?php echo $js; ?>/jquery.snippet.min.js"></script>
	<script src="<?php echo $zTabs; ?>/<?php echo $js; ?>/jquery.ztabs.js"></script>
	<script src="library/javascript/racetracker/jquery.racetracker.js"></script>
	
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
		<h1>Kathryn Green</h1>
	</div>
	
	<div id="nav">
		<ul id="mainTabs">
			<li id="home"><a href="main.php">Home</a></li>
			<li id="resume"><a href="resume.php">Resume</a></li>
			<li id="running"><a href="running.php">Running</a></li>
			<li id="race_tracker"><a href="running/race_tracker.php">Race Tracker</a></li>
		</ul>
	</div>

	<div id="main">
	</div>
	
	<div id="footer"></div>
</div>

</body>
</html>