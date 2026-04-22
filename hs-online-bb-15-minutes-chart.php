<?php
include('config.php');

// ---------------- CACHE ----------------
$cache_file = 'cache/hs-online-bb-15-minutes-history.html';
$cache_time = 600; // 10 min cache

if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_time) {
    readfile($cache_file);
    exit;
}
ob_start();

// ---------------- TIME LABELS (48) ----------------
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

// ---------------- FETCH DATA ----------------
$query = "SELECT * FROM hs_online_bb_52 ORDER BY game_date DESC";
$res = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>MAIN FATA-FAT 15 MINUTES Results</title>
    <meta name="description" content="Check today’s MAIN FATA-FAT 15 MINUTES results and historical chart. Accurate, daily updated results for MAIN FATA-FAT 15 MINUTES Bazar." />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5c8a5; font-family: sans-serif; }
        .result-table { background: #f5c8a5; margin-bottom: 30px; border-radius: 5px; overflow: hidden; border: 1px solid #ccc; }
        .result-date { background: #4B0082; color: white; text-align: center; padding: 8px 15px; font-weight: bold; font-size: 16px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ff00b3; text-align: center; padding: 6px; font-size: 14px; }
        th { background: #d63384; color: white; }
        @media (max-width: 768px) { th, td { font-size: 12px; padding: 5px; } }
        @media (max-width: 480px) { th, td { font-size: 11px; padding: 4px; } }
    </style>
</head>
<body>
<?php include_once('name1.php'); ?>

<div class="container-fluid py-3">
    <h1 style="font-size:18px;font-weight:bold;text-align:center;color:red;">
        MAIN FATA-FAT 15 MINUTES CHART
    </h1>

    <?php while ($row = mysqli_fetch_assoc($res)): ?>
        <div class="result-table">
            <div class="result-date">
                <?= date('F j, Y', strtotime($row['game_date'])) ?>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Time</th><th>Result</th>
                        <th>Time</th><th>Result</th>
                        <th>Time</th><th>Result</th>
                        <th>Time</th><th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 48; $i += 4) {
                        echo "<tr>";
                        for ($j = 0; $j < 4; $j++) {
                            $slot = $i + $j;
                            if (isset($time_labels[$slot - 1])) {
                                $val = !empty($row['col'.$slot]) ? htmlspecialchars($row['col'.$slot]) : '***';
                                echo "<td>{$time_labels[$slot - 1]}</td><td>{$val}</td>";
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
    <?php endwhile; ?>
</div>
</body>
</html>
<?php
// ---------------- CACHE SAVE ----------------
file_put_contents($cache_file, ob_get_contents());
ob_end_flush();
