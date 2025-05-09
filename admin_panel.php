<?php
include 'config.php'; // Ensure this connects to your DB


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="admin_panel.css">
    <title>Gym Admin Dashboard</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-dumbbell"></i>
            <a href="admin_panel.php">
                <h3>Gym Fitness</h3>
            </a>
        </div>

        <div class="sidebar-menu">
            <h4>Main</h4>
            <ul>
                <li class="">
                    <a href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pages_table.php">
                        <i class="fas fa-file-alt"></i>
                        <span>Pages</span>
                    </a>
                </li>
                <li>

                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span>Members</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Classes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-tie"></i>
                        <span>Trainers</span>
                    </a>
                </li>
            </ul>

            <h4>Management</h4>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-money-bill-wave"></i>
                        <span>Payments</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-line"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <div class="navbar">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <div class="navbar-right">
                <div class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="notification-count">3</span>
                </div>

                <div class="user-profile">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                </div>
                <a href="/creat_pages/login.php">Login</a>

                <a href="/creat_pages/logout.php">Logout</a>


                <!-- <a href="/gym_manage/admin_panel.php">Home</a> -->
                <!-- <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/creat_pages/logout.php">Logout</a>
                <?php else: ?>
                <a href="/creat_pages/login.php">Login</a>
                <?php endif; ?> -->
            </div>

        </div>


</body>

</html>