<?php
	require('../library/includes/lessc.inc.php');
	$less = new lessc();
	try {
		$less->checkedCompile('../library/javascript/racetracker/racetracker.less','../library/javascript/racetracker/racetracker.css');
	} catch (exception $e) {
  echo "fatal error: " . $e->getMessage();
}
?>
<link rel="stylesheet" href="library/javascript/racetracker/racetracker.css" />
<!--[if lt IE 9]><script language="javascript" src="library/javascript/excanvas.js"></script><![endif]-->
<script src="library/javascript/jquery.jqplot.min.js"></script>
<script src="library/javascript/jqplot.dateAxisRenderer.min.js"></script>
<script src="library/javascript/jqplot.cursor.min.js"></script>
<script src="library/javascript/jqplot.highlighter.min.js"></script>
<!-- <script src="library/javascript/racetracker/jquery.racetracker.js"></script> -->
<script src="library/javascript/race_tracker.js"></script>
<script>
	$(document).ready(function() {
		$race_row = $('tr.race#1').clone();
		$('#add_race').click(function() {
			$new_race = $race_row.clone();
			var row_count = $('tr.race').length;
			$new_race.attr('id',row_count+1);
			if (row_count%2 == 1) {
				$new_race.addClass('alternate_background');
			}
			$new_race.appendTo('form#race_data tbody');
			return false;
		});

		$('.remove').click(function() {
			$(this).parents('tr').remove();
			return false;
		});

		$('#racetracker').racetracker();
		$('#graph').click(function() {
			$('#racetracker').racetracker('graph');
			return false;
		});
	});
</script>

<h2>Race Results</h2>
<div id="racetracker"></div>

<h2>Add Races</h2>
<div id="raceform">
	<form method="post" name="race_data" id="race_data" action="">
		<table>
			<thead>
				<tr>
					<th></th>
					<th>Race Name</th>
					<th>Date</th>
					<th>Finish Time (hh:mm:ss)</th>
					<th>Distance (miles)</th>
				</tr>
			</thead>
			<tbody>
				<tr class="race" id="1">
					<td>
						<span class="remove">X</span>
						<input type="checkbox" name="display" class="display" />
					</td>
					<td>
						<input type="text" name="name" class="name" placeholder="Race Name" />
					</td>
					<td><input type="text" name="date" class="date" placeholder="Race Date" /></td>
					<td>
						<input type="text" name="hours" class="hours" class="time" placeholder="hh" />:
						<input type="text" name="minutes" class="minutes" class="time" placeholder="mm" />:
						<input type="text" name="seconds" class="seconds" class="time" placeholder="ss" />
					</td>
					<td><input type="text" name="distance" class="distance" placeholder="Distance (in miles)" /></td>
				</tr>
			</tbody>
		</table>
		<button id="graph">Graph</button>
		<button id="add_race">Add Another Race</button>
	</form>
</div>