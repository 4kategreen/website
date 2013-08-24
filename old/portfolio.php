<?php
	$page = 'portfolio';
	include('templates/header.inc'); 
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('pre#running_schedule_code').snippet(
			'php',
			{style: 'vim',showNum: false}
		);
		
		$('a.fancybox_gallery').fancybox({
			'speedIn' : 800, 
			'speedOut' : 800, 
			'transitionIn' : 'elastic',
			'transitionOut' : 'elastic',
			'overlayShow' : false
		});
	});
</script>

<h2>Design: Web, Print, and more Fun</h2>
<h3>Publicly Available Code</h3>
<ul>
	<li>
		<a href="http://www.nrl.navy.mil/chacs" target="_blank">NRL Template Sample Site</a><br/>
		This site shows the html and css code from my template redesign. The header artwork is also my design work.
	</li>
</ul>
	
<h3>Marketing and Branding Examples: Running Club Race Materials</h3>
<p>In this section, there are a sample of marketing material created for a few races and programs for the Prince George's Running Club.</p>
<ul class="fancyBox">
	<li><a class="fancybox_gallery" rel="pgrc" href="portfolio/full/springburst_shirt_design.png" title="Shirt design for PGRC's signature race in 2012. Designing for the screening process is so different from designing graphics for the<br/>web because each color is laid separately. It was a fun challenge."><img src="portfolio/thumb/springburst_shirt_design.png" alt="Shirt design for PGRC's signature race in 2012. Designing for the screening process is so different from designing graphics for the web because each color is laid separately. It was a fun challenge." /></a></li>
	<li><a class="fancybox_gallery" rel="pgrc" href="portfolio/full/springburst_banner.png" title="Website banner for Springburst. Moving back to my 'native' design realm, it was fun to use some gradients while still keeping to the color scheme."><img src="portfolio/thumb/springburst_banner.png" alt="Website banner for Springburst." /></a></li>
	<li><a class="fancybox_gallery" rel="pgrc" href="portfolio/full/springburst_flier.jpg" title="Fliers distributed to market the race. They were designed to be black and white and easy to read."><img src="portfolio/thumb/springburst_flier.jpg" alt="Fliers distributed to market the race."/></a></li>
	<li><a class="fancybox_gallery" rel="pgrc" href="portfolio/full/springburst.jpg" title="The actual shirt from the race, printed with a five color screen."><img src="portfolio/thumb/springburst.jpg" alt="The actual shirt from the race, printed with a five color screen."/></a></li>
	<li><a class="fancybox_gallery" rel="pgrc" href="portfolio/full/walk_flier.png" title="A simple flier designed to market a club walking program. Designed with both color and black and white printing in mind."><img src="portfolio/thumb/walk_flier.png" alt=""/></a></li>
</ul>

<h3>Other Fun</h3>
<p>Some other, unrelated designs completed recently.</p>
<ul class="fancyBox">
	<li><a class="fancybox_gallery" rel="other" href="portfolio/full/running_data.png" title="A portion of some fitness data tracked in Numbers. An effort was made to make sure <br/> the data is presentable when I need to."><img src="portfolio/thumb/running_data.png" alt="Fitness data" /></a></li>
	<li><a class="fancybox_gallery" rel="other" href="portfolio/full/hangovers_hockey.jpg" title="A ball hockey shirt designed for my team in 2010."><img src="portfolio/thumb/hangovers_hockey.jpg" alt="Hockey tshirt design" /></a></li>
	<li><a class="fancybox_gallery" rel="other" href="portfolio/full/ss.png" title="The Swarming Stinkbugs: A fantasy hockey league team."><img src="portfolio/thumb/ss.png" alt="Swarming Stinkbugs: fantasy sports team logo" /></a></li>
</ul>

<h2>PHP Code Samples</h2>
<div>
	<h3>Running Schedule</h3>
	<p>The problem was to create a schedule of workouts for one location. I tried to make it so we could later add a simple form to let coaches create their own schedules. Find this in action at <a href="http://www.pgrc.org/training/tuesday_track.php">www.pgrc.org/training/tuesday_track.php</a>.</p>
	<pre id="running_schedule_code" class="snippet">
// put each week's workout in order here
$workouts = Array(
	'5 x 6 minutes (with optional 300m fast and 100m recoveries)', 
	'Ladder 2, 4, 6, 8, 6, 4, 2 minutes',
	'Track closed, meet at Wells Ice Arena',
	'Stride clinic, 5 x 2 minutes',
	'3 x 8 minutes',
	'Ladder 7, 6, 5, 4, 3, 2',
	'8 x 3 minutes',
	'"Whistle" run'
);
// start date for the workouts
$start_date = new DateTime('2012-03-06');
$date = new DateTime();

...

$date = $start_date; // doing this so the $start_date remains the same as i iterate
foreach ($workouts as $workout) {
	echo ('<tr');
	echo ($key%2 == 0) ? ' class="greyBackground"' : '';
	echo ('><td>'.$date->format('m/d/Y').'</td><td>'.$workout.'</td></tr>');
	$date->modify('+7 days');
}
</pre>
</div>
<?php include('templates/footer.inc'); ?>