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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
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
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .action-card i {
            font-size: 40px;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .action-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .action-card p {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 15px;
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
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                    <i class="fas fa-users"></i>
                    <h3>Manage Users</h3>
                    <p>View, edit, or delete user accounts</p>
                    <a href="manage_users.php">Go to Users</a>
                </div>
                <div class="action-card">
                    <i class="fas fa-book"></i>
                    <h3>Manage Courses</h3>
                    <p>Create and manage e-learning courses</p>
                    <a href="manage_courses.php">Go to Courses</a>
                </div>
                <div class="action-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Sales Tracking</h3>
                    <p>View sales reports and add new sales records</p>
                    <a href="sales_tracking.php">Track Sales</a>
                </div>
            </section>

            <a href="admin_logout.php" class="logout-btn">Logout</a>
        </main>
    </div>
</body>
</html>
