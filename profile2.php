<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$user_data = [
    'Full Name' => 'Nur Farzana Hazwani Bt. Mohd Fauzi',
    'No matric' => '2024794159',
    'Faculty' => 'Faculty of Information Management',
    'Email' => 'farzana97@gmail.com',
    'Phone' => '012-4349870',
    'Address' => '97, Jalan Ampang, Taman Manis, 11900 Melaka'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<div class="card p-4 shadow-lg">
        <h2 class="text-center">User Profile</h2>

        <div class="text-center mb-4">
            <img src="profile2.jpg" alt="Profile Picture"  width="200">
        </div>

        <table class="table table-bordered mt-3">
            <tbody>
                <?php foreach ($user_data as $key => $value): ?>
                    <tr>
                        <th><?php echo htmlspecialchars($key); ?></th>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <a href="index.php" class="home-btn">Home</a>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>