<?php
	$page = 'running';
	include('../templates/header.inc'); 
?>
<div class="less-error-message">
</div>
<!--[if lt IE 9]><script language="javascript" src="../javascript/excanvas.js"></script><![endif]-->
<script src="../javascript/jquery.jqplot.min.js"></script>
<script src="../javascript/jqplot.dateAxisRenderer.min.js"></script>
<script src="../javascript/jqplot.cursor.min.js"></script>
<script src="../javascript/jqplot.highlighter.min.js"></script>
<script src="../javascript/race_tracker.js"></script>
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

		var data=[['2012-06-23 12:00PM',26.27],['2012-06-30 12:00PM',25.25],['2012-07-14 12:00PM',25.21]];
		$.jqplot('graph',  [data], {
			axes:{xaxis:{renderer:$.jqplot.DateAxisRenderer}}
		});
	});
</script>

<h2>Race Results</h2>
<div id="graph"></div>

<h2>Add Races</h2>
<div id="race_tracker">
	<form method="post" name="race_data" id="race_data" action="">
		<table>
			<thead>
				<tr>
					<th></th>
					<th>Date</th>
					<th>Finish Time (hh:mm:ss)</th>
					<th>Distance (miles)</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="race" id="1">
					<td>
						<span class="remove">O</span>
						<input type="checkbox" name="display" id="display" />
					</td>
					<td><input type="text" name="date" id="date" placeholder="Race Date" /></td>
					<td>
						<input type="text" name="hours" id="hours" class="time" placeholder="hh" />:
						<input type="text" name="minutes" id="minutes" class="time" placeholder="mm" />:
						<input type="text" name="seconds" id="seconds" class="time" placeholder="ss" />
					</td>
					<td><input type="text" name="distance" id="distance" placeholder="Distance (in miles)" /></td>
					<td><button class="add">Add</button></td>
				</tr>
			</tbody>
		</table>
		<button id="add_race">Add Another Race</button>
	</form>
</div>

<?php include('../templates/footer.inc'); ?>