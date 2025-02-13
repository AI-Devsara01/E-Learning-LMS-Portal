<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #f6d365, #fda085);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #4CAF50;
            font-size: 2.5rem;
            font-weight: bold;
        }

        h2 {
            text-align: center;
            color: #555;
            margin-bottom: 20px;
        }

        .actions {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .action-card {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .action-card a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 0;
            border-radius: 5px;
            font-weight: bold;
            display: block;
            margin-top: 15px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .action-card a:hover {
            background-color: #45a049;
        }

        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 30px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .logout-btn:hover {
            background-color: #e53935;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .actions {
                flex-direction: column;
                align-items: center;
            }

            .action-card {
                width: 90%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome, Admin</h1>
            <h2>Your Control Panel</h2>
        </header>

        <main>
            <section class="actions">
                <div class="action-card">
                    <h3>Manage Users</h3>
                    <p>View, edit, or delete user accounts</p>
                    <a href="manage_users.php">Go to Users</a>
                </div>
                <div class="action-card">
                    <h3>Manage Courses</h3>
                    <p>Create and manage e-learning courses</p>
                    <a href="manage_courses.php">Go to Courses</a>
                </div>
                <div class="action-card">
                    <h3>Sales Tracking</h3>
                    <p>View sales reports and add new sales records</p>
                    <a href="sales_report.php">Track Sales</a>
                </div>
            </section>

            <a href="admin_logout.php" class="logout-btn">Logout</a>
        </main>
    </div>
</body>
</html>
