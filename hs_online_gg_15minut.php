<div class="my-table mr-sl" style="border: 1px solid red; margin: 5px 0px;">

<?php
date_default_timezone_set('Asia/Kolkata');

// ------------------ TIME LABELS ------------------
$time_labels = [
    "9:15 AM","9:30 AM","9:45 AM","10:00 AM","10:15 AM","10:30 AM","10:45 AM",
    "11:00 AM","11:15 AM","11:30 AM","11:45 AM",
    "12:00 PM","12:15 PM","12:30 PM","12:45 PM",
    "1:00 PM","1:15 PM","1:30 PM","1:45 PM",
    "2:00 PM","2:15 PM","2:30 PM","2:45 PM",
    "3:00 PM","3:15 PM","3:30 PM","3:45 PM",
    "4:00 PM","4:15 PM","4:30 PM","4:45 PM",
    "5:00 PM","5:15 PM","5:30 PM","5:45 PM",
    "6:00 PM","6:15 PM","6:30 PM","6:45 PM",
    "7:00 PM","7:15 PM","7:30 PM","7:45 PM",
    "8:00 PM","8:15 PM","8:30 PM","8:45 PM",
    "9:00 PM"
];

// ------------------ TXT FILE DATA ------------------
$file_path = "txtdb/hs_online_bb_52_results.txt"; 
$results = [];
$last_draw = '--';
$last_time = '--';

if (file_exists($file_path)) {
    $txt_raw = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Fill results array
    for ($i = 0; $i < count($time_labels); $i++) {
        $results[$i] = isset($txt_raw[$i]) ? trim($txt_raw[$i]) : '--';
    }

    // Get last non-empty line for "Last Draw"
    if (!empty($txt_raw)) {
        $last_draw = trim(end($txt_raw));
        $last_index = count($txt_raw) - 1;
        $last_time  = isset($time_labels[$last_index]) ? $time_labels[$last_index] : '--';
    }
} else {
    for ($i = 0; $i < count($time_labels); $i++) {
        $results[$i] = '--';
    }
}
?>

    <!-- Header Section -->
    <div style="display:block; border: 1px solid red; padding: 8px; background: #ff57a6; overflow: hidden; height: 110px;">
        <!-- Left side: Game name -->
        <p style="margin: 0; font-weight: bold; font-size: 23px; color: white; text-shadow: 0px 0px 3px black;">
            MAIN FATA-FAT <br> 15 MINUTES
        </p>
        <hr>
        <p style="color: #ffef00; text-shadow: 0px 0px 3px black;font-size: 18px;">
            Last Draw (<?= $last_time ?>) <br> <?= htmlspecialchars($last_draw); ?>
        </p>

        <!-- Chart button -->
        <a href="hs-online-bb-15-minutes-chart.php" style="float:right; padding: 3px 8px; background-color: #000; border-radius: 5px; font-size: 14px; color: white; text-decoration: none; position: relative; right: 0px; top: -75px;">
            Chart
        </a>
    </div>

    <!-- RESULT TABLE -->
    <table border="1" cellpadding="5" cellspacing="0" style="width:100%; border-collapse: collapse; text-align:center;">
        <thead style="background:#000; color:#fff;">
            <tr>
                <th>Time</th><th>Result</th>
                <th>Time</th><th>Result</th>
                <th>Time</th><th>Result</th>
                <th>Time</th><th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Each row will have 4 time-result pairs = 8 columns
            for ($i = 0; $i < count($time_labels); $i += 4) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    if (isset($time_labels[$i + $j])) {
                        echo "<td>{$time_labels[$i + $j]}</td><td>{$results[$i + $j]}</td>";
                    } else {
                        echo "<td>--</td><td>--</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
