<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>papertradr</title> 
    <link rel="stylesheet" href="../assets/styles/investing.css">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="js/index.js"></script>
  </head>
  <body>
    <main>
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
        <div class="banner">
<!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
              {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500"
              },
              {
                "proName": "FOREXCOM:NSXUSD",
                "title": "US 100"
              },
              {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR/USD"
              },
              {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
              },
              {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
              }
            ],
            "showSymbolLogo": true,
            "colorTheme": "dark",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "en"
          }
            </script>
          </div>
          <br>
<!-- TradingView Widget END -->
        </div>
        <br>
        <h1>Where to get started?</h1>
        <div>
          <img src="../assets/images/man.jpg" width = "800" height = "500">
        </div>
        <h3>Learn the differences between retirement accounts.</h3>
        <ul id="test">
          <li><a href="401k.html">Opening a 401k</a></li> |
          <li><a href="roth.html">Opening a Roth IRA</a></li> |
          <li><a href="trad.html">Opening a Traditional IRA</a></li> 
        </ul>

    </main>

  </body>

</html>
