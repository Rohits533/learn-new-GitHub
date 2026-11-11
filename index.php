<?php
// 1. Variables and Data Types
$siteName = "My Dynamic Site";
$userIsLoggedIn = true;
$currentHour = (int)date('H'); // 24-hour format

// 2. An Associative Array
$userProfile = [
    "username" => "dev_jay",
    "role"     => "Administrator",
    "skills"   => ["PHP", "MySQL", "JavaScript"]
];

// 3. A Custom Function
function generateGreeting(string $name, int $hour): string {
    if ($hour < 12) {
        return "Good morning, " . $name . "!";
    } elseif ($hour < 18) {
        return "Good afternoon, " . $name . "!";
    } else {
        return "Good evening, " . $name . "!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteName; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f9; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 400px; }
        .status { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <!-- 4. Outputting Dynamic Content -->
        <h1><?php echo generateGreeting($userProfile['username'], $currentHour); ?></h1>
        
        <!-- 5. Conditional Statement -->
        <?php if ($userIsLoggedIn): ?>
            <p>Status: <span class="status">Logged In as <?php echo $userProfile['role']; ?></span></p>
            
            <h3>Your Core Skills:</h3>
            <ul>
                <!-- 6. Loop Over Array Elements -->
                <?php foreach ($userProfile['skills'] as $skill): ?>
                    <li><?php echo htmlspecialchars($skill); ?></li>
                <?php endphp ?>
            </ul>
        <?php else: ?>
            <p>Please log in to view your profile.</p>
        <?php endif; ?>
        
        <p><small>Page rendered at: <?php echo date('Y-m-d H:i:s'); ?></small></p>
    </div>

</body>
</html>
