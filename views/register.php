<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title> <!--TODO: change title, make up something creative -->
    <link rel="stylesheet" href="../assets/styles/register.css">  <!-- can we use some fun js libraries? anime.js or p5.js maybe-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul>
            <li class="welcome">Welcome to <span style="color: #0faa55;">PaperTradr</span> | User</li> <!-- TODO: update User with index.js -->
            <li><a href="main.html">Home</a></li> |
            <li><a href="register.html">Register</a></li> |
            <li><a href="login.html">Login</a></li> |
            <!--<li><a href="news">News</a></li>-->
            <!--<li><a href="retirement"> Retirement</a></li>-->           
        </ul>
    </nav>
    </br>

    <form action="" method="post">
        <div>
            <h1>Register</h1>
            <hr>
            <label for="username"><b>Username</b></label>
            </br>
            <input type="text" placeholder="Enter Username" name="name" id="name" required>
            </br>         
            <label for="email"><b>Email</b></label>
            </br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            </br>
            <label for="password"><b>Password</b></label>
            </br>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            </br>
            <label for="password-repeat"><b>Repeat Password</b></label>
            </br>
            <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required>
            <hr>
            <!--TODO: add the ability to login with google or facebook -->
            <button type="submit" class="registerbtn">Register</button>
            <p>Already have an account? <a href="login">Sign in</a>.</p>
        </div>
</form>
</body>
</html>