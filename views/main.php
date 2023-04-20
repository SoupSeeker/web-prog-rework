﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>papertradr</title> <!--TODO: change title, make up something creative -->
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">  <!-- in server.js, we are telling it to serve up the assets folder, so we just need to give it styles/style.css-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="../assets/js/index.js"></script> <!--TODO: update index.js-->


  </head>
  <body>
    <main>
        <nav>
          <ul>
            <li class="welcome">Welcome to <span style="color: #0faa55;">PaperTradr</span> | User</li> <!-- TODO: update User with index.js -->
            <li><a href="main.html">Home</a></li> |
            <li><a href="register.html">Register</a></li> |
            <li><a href="login.html">Login</a></li>   <!--TODO: make it so the login button changes to logout -->
            <!--<li><a href="news">News</a></li>-->
            <!--<li><a href="retirement"> Retirement</a></li>--> 
          </ul>
        </nav>
        </br>
        <div>
            <!-- Macroaxis Scrolling Ticker Widget -->
            <script src="https://www.macroaxis.com/widgets/url.jsp?t=42&s=AMZN,GOOG,AAPL,MSFT,COST,META,DIS,MA,SHOP,TSLA,SPY,TSM,QQQ,VOO,IWM">
            </script>
        </div>

        <div class="banner">
          <img src="../assets/images/banner.jpg"/><span style="font-size: 36px;">Welcome to Papertradr</span> <!--it'd be cool to make an animated banner-->
        </div>

        <a href="stockmarket.html">
          <div class="info">
              <p>Learn Stock Trading Essentials</p>
          </div>
        </a>

        <a href="options.html"> <!--TODO: add options info hub-->
          <div class="info">
              <p>Learn About Options Trading</p>
          </div>
        </a>

        <a href="retirement.html">
          <div class="info">
              <p>Learn About Retirement</p>
          </div>
        </a>
        
    </main>
  <div class="footer">
      
  </div>
  </body>

</html>
