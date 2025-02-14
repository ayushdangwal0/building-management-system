<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: buildingmanagement.html"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="building_management.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>DLF Dashboard</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="overview" class="content">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Here is your personalized dashboard.</p>
    </section>

    <section id="profile" class="content">
        <h2>Your Profile</h2>
        <p>Manage your details here.</p>
    </section>

    <section id="logout" class="content">
        <h2>Logout</h2>
        <a href="logout.php">Click here to logout</a>
    </section>

    <footer>
        <p>&copy; 2024 DLF. All Rights Reserved.</p>
    </footer>
</body>
</html>
