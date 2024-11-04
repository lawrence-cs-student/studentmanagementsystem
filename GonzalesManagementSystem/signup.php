

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">


<div class = "side1">
        <div class="container1">
            <h4 class="text-center">Signup</h2>
            <form method = "POST" action = "signupform.php">
                <div class="mb-1">
                    <label for="email" class="form-label">Username</label>
                    <input type="email" name="username" class="form-control" id="email" placeholder="Enter your username" required>
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <div class="mb-1">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your lastname" required>
                </div>
                <div class="mb-1">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" name = "firstname" class="form-control" id="firstname" placeholder="Enter your firstname" required>
                </div>
                <div class="mb-1">
                    <label for="middlename" class="form-label">Middlename</label>
                    <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Enter your middlename" required>
                </div>
                <div class="mb-1">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date"  name="birthday" class="form-control" id="birthday" placeholder="Enter your birthday" required>
                </div>
                <div class="mb-1">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address" required>
                </div>
                <div class="mb-1">
                    <label for="number" class="form-label">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" id="mobile-number" placeholder="Enter your mobile number" required>
                </div>
                <div class = "d-flex justify-content-center">
                    <button type="submit" class="btn">Signup</button>
                </div>
            </form>
        </div>
    </div>