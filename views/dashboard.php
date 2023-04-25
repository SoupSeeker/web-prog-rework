<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>papertradr</title> <!--TODO: change title, make up something creative -->
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">  <!-- in server.js, we are telling it to serve up the assets folder, so we just need to give it styles/style.css-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="../assets/js/index.js"></script> <!--TODO: update index.js-->


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
<!-- TradingView Widget END -->

        

        
    </main>
  <div class="footer">
      Nothing in this webpage is intended as financial advice. Invest at your own risk.
  </div>
  </body>

</html>
