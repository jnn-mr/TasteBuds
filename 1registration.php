<!DOCTYPE html>
<html>
<head>
    <title>TasteBud Registration</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="2register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
