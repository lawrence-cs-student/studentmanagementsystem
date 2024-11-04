
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">

<body class="gradient-custom">

    <div class = "side2">
        <div class="container2">
            <h2 class="text-center">Login</h2>
            <form method = "POST" action = "loginform.php">
                <div class="mb-1">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <a href="signup.php">New User?</a>
                <div class = "d-flex justify-content-center">
                    <button type="submit" class="btn ">Login</button>
                </div>
            </form>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
