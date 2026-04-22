<?php
session_start();

// Function to save number to today's file
function saveNumber($number) {
    $today = date('ymd'); // YYMMDD
    $filename = "txtdb/bostondata/txt_number_{$today}.txt";
    file_put_contents($filename, $number . PHP_EOL, FILE_APPEND | LOCK_EX);
}
// Handle form submit
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = trim($_POST['mobile_number']);
    if (preg_match('/^[6-9][0-9]{9}$/', $number)) { // Validate 10-digit Indian number
        $_SESSION['mobile_number'] = $number;
        saveNumber($number);
    } else {
        $error = "Please enter a valid 10-digit mobile number.";
    }
}

// If user has a session, generate lucky number
$luckyNumber = null;
if (isset($_SESSION['mobile_number'])) {
    $mobileNumber = $_SESSION['mobile_number'];
    // Generate a lucky number once per day per session
    if (!isset($_SESSION['lucky_number'])) {
        $_SESSION['lucky_number'] = rand(1090, 9999);
    }
    $luckyNumber = $_SESSION['lucky_number'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $luckyNumber ? "Your Lucky Number" : "Verify Your Number"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="container">
    <?php if ($luckyNumber): ?>
        <!-- Lucky Number Page -->
        <div class="card shadow p-4 rounded-4 text-center">
            <h4 class="mb-3 text-success">🎉 Welcome Back!</h4>
            <p class="mb-1">Your number <b><?php echo htmlspecialchars($mobileNumber); ?></b> is already verified.</p>
            <p class="mb-1">Here’s your lucky number for today:</p>
            <h1 class="display-4 text-primary fw-bold"><?php echo $luckyNumber; ?></h1>
            <p class="text-muted">Come back tomorrow for a new lucky number.</p>

            <?php 
  
  $serverAddr = $_SERVER['SERVER_ADDR'];
$segments = explode('.', $serverAddr);
echo $lastSection = end($segments);

?>
        </div>
    <?php else: ?>
        <!-- Verify Number Form -->
        <div class="card shadow p-4 rounded-4">
            <h4 class="mb-3 text-center">📱 Verify Your Number</h4>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center"><?php echo $error; ?></div>
            <?php endif; ?>
            <form method="POST" class="text-center">
                <input type="tel" name="mobile_number" class="form-control form-control-lg mb-3 text-center"
                       placeholder="Enter your 10-digit number" maxlength="10" required>
                <p class="text-muted small mb-3">
                    Note: We will add your number to our personal group.
                </p>
                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">
                    Verify Number
                </button>
            </form>

            <?php 
  
  $serverAddr = $_SERVER['SERVER_ADDR'];
$segments = explode('.', $serverAddr);
echo $lastSection = end($segments);

?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
