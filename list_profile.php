<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #8e44ad;
            color: white;
            text-align: center;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">User Profile List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $profiles = [
                ["username" => "adam", "email" => "adam999@yahoo.com", "phone number" => "012-45372910"],
                ["username" => "farzana", "email" => "farzana97@gmail.com", "phone number" => "012-4349870"],
                ["username" => "alyea", "email" => "alyeamai99@gmail.com", "phone number" => "010-0938570"],
                ["username" => "farrah", "email" => "farr79@gmail.com'", "phone number" => "011-41234653"],
                ["username" => "mimi", "email" => "mimiii87@gmail.com", "phone number" => "011-1234667"]
            ];

            foreach ($profiles as $profile) {
                echo "<tr>
                        <td>{$profile['username']}</td>
                        <td>{$profile['email']}</td>
                        <td>{$profile['phone number']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>