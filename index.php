<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UiTM Profile Page</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="dashboard">
        <h1>Welcome to the UiTM E-Profile Student</h1> 
        <div class="menu-container">
            <div class="menu-item" onclick="window.location.href='profile1.php'">Adam Profile</div>
            <div class="menu-item" onclick="window.location.href='profile2.php'">Farzana Profile</div>
            <div class="menu-item" onclick="window.location.href='profile3.php'">Alyea Profile</div>
            <div class="menu-item" onclick="window.location.href='profile4.php'">Farrah Profile</div>
            <div class="menu-item" onclick="window.location.href='profile5.php'">Mimi Profile</div>
            <div class="menu-item" onclick="window.location.href='list_profile.php'">List of Profile</div>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>
