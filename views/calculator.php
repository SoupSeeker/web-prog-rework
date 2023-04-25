 <?php
    session_start();
    if(empty($_SESSION['name']))
    {
        header('Location: /login.html');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Information</title>
    <link rel="stylesheet" href="../assets/styles/calculator.css">
    <!-- can we use some fun js libraries? anime.js or p5.js maybe-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        <?php if($_SESSION["name"]){ ?>
        <nav>
          <ul>
            <li class="welcome">Welcome to <span style="color: #0faa55;">PaperTradr</span> <?php echo $_SESSION["name"] ?>
            </li>
            <li><a href="main.html">Home</a></li> |
            <li><a href="news.html">News</a></li> |
            <li><a href="calc.html">Calculator</a></li> |
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>

      <?php } else { ?>
        <nav>
          <ul>
            <li class="welcome">Welcome to <span style="color: #0faa55;">PaperTradr</span> <?php echo $_SESSION["name"] ?>
            </li>
            <li><a href="main.html">Home</a></li> |
            <li><a href="register.html">Register</a></li> |
            <li><a href="login.html">Login</a></li>
          </ul>
        </nav>
      <?php } ?>
        </br>

        <!--TODO: add vader-sentiment package to the browser so we can get stock news and evaluate it -->

        <h1>Investment Calculator</h1>

        <!-- TradingView Widget BEGIN -->

        <!-- TradingView Widget END -->

        <form method="POST" action="proc.php">
            <fieldset>
                <legend>Information</legend>
                <p>
                    <label>Stock Files:</label>
                    <input type="text" />
                    </br>
                    </br>
                    <label>
                        Length of time:
                    </label>
                    <input type="text" />
                    </br>
                    </br>
                    <label>
                        More info:
                    </label>
                    <input type="text" />

                    </br>
                    </br>
                <div class="result">
                    <label>Results: </label>
                    <textarea name="result" rows="4" cols="50"></textarea>
                </div>
                <input type="submit" value="Calculate" />
                <input type="reset" value="Reset" />
                <br>
                <br>
            </fieldset>
        </form>


    </main>
</body>

</html>
