<div class="my-table mumraj-sl">
	<h4>Mumbai Rajshree Star Line Result</h4>
	<table>
		<thead>
			<tr>
				<th>Time</th>
				<th>Result</th>
				<th>Time</th>
				<th>Result</th>
			</tr>
		</thead>
		<tbody>

<?php 
$mr_star=file("txtdb/mr_star_line_results.txt");
?>
			<tr>
				<td>09:30 AM</td>
				<td><?php echo $mr_star[1] ?></td>
				<td>03:30 PM</td>
				<td><?php echo $mr_star[7] ?></td>
			</tr>
			<tr>
				<td>10:30 AM</td>
				<td><?php echo $mr_star[2] ?></td>
				<td>04:30 PM</td>
				<td><?php echo $mr_star[8] ?></td>
			</tr>
			<tr>
				<td>11:30 AM</td>
				<td><?php echo $mr_star[3] ?></td>
				<td>05:30 PM</td>
				<td><?php echo $mr_star[9] ?></td>
			</tr>
			<tr>
				<td>12:30 PM</td>
				<td><?php echo $mr_star[4] ?></td>
				<td>06:30 PM</td>
				<td><?php echo $mr_star[10] ?></td>
			</tr>
			<tr>
				<td>01:30 PM</td>
				<td><?php echo $mr_star[5] ?></td>
				<td>07:30 PM</td>
				<td><?php echo $mr_star[11] ?></td>
			</tr>
			<tr>
				<td>02:30 PM</td>
				<td><?php echo $mr_star[6] ?></td>
				<td>08:30 PM</td>
				<td><?php echo $mr_star[12] ?></td>
			</tr>
		</tbody>
	</table>
</div>