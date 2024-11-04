<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles2.css">
</head>

<body>
    <header class="text-white text-center py-3">
        <h1>Schedule Management System</h1>
        <h1>
            <?php
            // Check if the cookie 'username' is set and display it
            if (isset($_COOKIE['username'])) {
                echo "Welcome, " . htmlspecialchars($_COOKIE['username']);
            } else {
                echo "Welcome, Guest";
            }
            ?>
        </h1>
        <button class="logout" onclick="confirmLogout()">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </header>
    <div class="flex-container">
        <nav class="dashboard p-4">
            <div class="nav flex-column">
                <a class="nav-link" href="home.php"><i class="fas fa-home"></i>Home</a>
                <a class="nav-link" href="class.php"><i class="fas fa-chalkboard-teacher"></i>Class</a>
                <a class="nav-link" href="schedule.php"><i class="fas fa-calendar-alt"></i>Schedule</a>
                <a class="nav-link" href="teacher.php"><i class="fas fa-user-tie"></i>Teacher</a>
                <a class="nav-link" href="user.php"><i class="fas fa-users"></i>User</a>
                <a class="nav-link" href="maintenance.php"><i class="fas fa-cogs"></i>Maintenance</a>
            </div>
        </nav>
        
        <div class="content">
            <nav class="pagination">
                <h3>Schedule</h3>
            </nav>
            <main>
                <h2>Main Content</h2>
            </main>
        </div>
    </div>
    

    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>

    <script>
        function confirmLogout() {
            const confirmation = confirm("Are you sure you want to logout?");
            if (confirmation) {
                window.location.href = 'login.php';
            }
        }
    </script>
</body>
</html>
