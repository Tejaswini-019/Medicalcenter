<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <script src="./css/jquery-3.7.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
    <div class="login">
        <form method="post" action="login.php">
        <h3>Login</h3>
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
            <p style="margin-left: -15px;">Don't have an account? <a href="register.php">Register</a>.</p>
        </div>
    </div>
</form>
</body>
</html>