<div class="my-table mr-sl" style="border: 1px solid red; margin: 5px 0px;">
	<h4>MAIN BOMBAY 36 BAZAR
	<a href="main-bombay-36-bazar-chart.php" style="padding: 3px 5px 2px;height: auto;width: auto;float: right;margin: -1px 0px 0px 0;background-color: #000;border-radius: 5px;font-size: 14px;color: white;text-shadow: none;">Chart</a> </h4>
</h4>
<?php
date_default_timezone_set('Asia/Kolkata');

$time_labels = [
    "11:00 AM", "11:15 AM", "11:30 AM", "11:45 AM",
    "12:00 PM", "12:15 PM", "12:30 PM", "12:45 PM",
    "01:00 PM", "01:15 PM", "01:30 PM", "01:45 PM",
    "02:00 PM", "02:15 PM", "02:30 PM", "02:45 PM",
    "03:00 PM", "03:15 PM", "03:30 PM", "03:45 PM",
    "04:00 PM", "04:15 PM", "04:30 PM", "04:45 PM",
    "05:00 PM", "05:15 PM", "05:30 PM", "05:45 PM",
    "06:00 PM", "06:15 PM", "06:30 PM", "06:45 PM",
    "07:00 PM", "07:15 PM", "07:30 PM", "07:45 PM"
];

// Read results and skip any empty lines
$mb_36_results_raw = file("txtdb/main_bombay_36_results.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Ensure 36 results; fill missing with '--'
$mb_36_results = [];
for ($i = 0; $i < count($time_labels); $i++) {
    $mb_36_results[$i] = isset($mb_36_results_raw[$i]) ? trim($mb_36_results_raw[$i]) : '--';
}

// Get current result for wheel section
$current_result = '--';
$current_time = strtotime(date('h:i A'));

foreach ($time_labels as $index => $label) {
    $label_time = strtotime($label);
    if ($current_time >= $label_time) {
        $current_result = $mb_36_results[$index];
    } else {
        break;
    }
}
?>

<!-- SPIN WHEEL SECTION -->
<div class="wheel-section">
  <div class="wheel-container">
    <div class="spin-center-text"><?php echo $current_result; ?></div>
    <img src="img/spinner.png" class="wheel-image" alt="Spinning Wheel">
  </div>
</div>

<!-- RESULT TABLE -->
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
        for ($i = 0; $i < count($time_labels); $i += 2) {
            echo "<tr>";
            echo "<td>{$time_labels[$i]}</td><td>{$mb_36_results[$i]}</td>";
            echo "<td>{$time_labels[$i + 1]}</td><td>{$mb_36_results[$i + 1]}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>