<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
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
    
    <div class="d-flex flex-row">
        <nav class="dashboard">
            <div class="nav flex-column">
                <a class="nav-link" href="home.php"><i class="fas fa-home"></i>Home</a>
                <a class="nav-link" href="class.php"><i class="fas fa-chalkboard-teacher"></i>Class</a>
                <a class="nav-link" href="schedule.php"><i class="fas fa-calendar-alt"></i>Schedule</a>
                <a class="nav-link" href="teacher.php"><i class="fas fa-user-tie"></i>Teacher</a>
                <a class="nav-link" href="user.php"><i class="fas fa-users"></i>User</a>
                <a class="nav-link" href="maintenance.php"><i class="fas fa-cogs"></i>Maintenance</a>
            </div>
        </nav>
        
        <div class="content p-3">
            <nav class="pagination">
            <h2>User List</h2>
            </nav>

            <main>
            <a href="adduser.php" class="mb-1"> <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Add</button></a>
            <div class="mt-0.5">
            <div class="table-responsive">
                <table id="users" class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Last Login</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('config.php');
                        $sql = 'SELECT * FROM users';
                        $results = mysqli_query($conn, $sql);

                        if ($results && mysqli_num_rows($results) > 0) {
                            foreach($results as $result) {
                        ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['lastname']; ?></td>
                            <td><?php echo $result['firstname']; ?></td>
                            <td><?php echo $result['middlename']; ?></td>
                            <td><?php echo $result['birthday']; ?></td>
                            <td><?php echo $result['address']; ?></td>
                            <td><?php echo $result['mobile']; ?></td>
                            <td><?php echo $result['lastlogin']; ?></td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='11' class='text-center'>No users found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


            </main>
        </div>
    </div>
    
    <footer class="text-center">
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        });
    </script>
</body>
</html>
