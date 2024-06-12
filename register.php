<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./css/jquery-3.7.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
<div class="login">
        <form method="post" action="register_action.php">
        <h3>Register</h3>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="container signin mt-3">
            <p style="margin-left: -15px;">If you have an account? <a href="index.php">Login</a>.</p>
        </div>
    </div>
</body>
</html>