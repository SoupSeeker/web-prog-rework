<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title> <!--TODO: change title, make up something creative -->
    <link rel="stylesheet" href="../assets/styles/register.css">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
<nav>
    <ul>
        <li class="welcome">Welcome to <span style="color: #0faa55;">PaperTradr</span> | User</li> <!-- TODO: update User with index.js -->
        <li><a href="main.html">Home</a></li> |
        <li><a href="register.html">Register</a></li> |
        <li><a href="login.html">Login</a></li> 
    </ul>
</nav>
</br>

<form action="auth.php" method="POST">   <!--TODO: create a login php / js file-->
    <div>
        <h1>Login</h1>
        <hr>
        <label for="username"><b>Username</b></label>
        </br>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
        </br>
        <label for="password"><b>Password</b></label>
        </br>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        </br>
        <hr>

        <button type="submit" class="registerbtn">Login</button>
        <p>Don't have an account? <a href="register.html">Sign up here</a>.</p>
    </div>
</form>
</body>
</html>