<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Information</title>
    <link rel="stylesheet" href="../assets/styles/register.css">  <!-- can we use some fun js libraries? anime.js or p5.js maybe-->
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
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets today</span></a> by TradingView</div>
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
        <!--TODO: add vader-sentiment package to the browser so we can get stock news and evaluate it -->

        <h1>Stock News</h1>

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-copyright">
            <a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank">
              <span style="color: #0faa55;">AAPL stock chart</span>
            </a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
              new TradingView.widget(
              {
                "height": 580,
                "width": 710,
                "symbol": "NASDAQ:AAPL",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_6bdd5"
            }
            );
            </script>
        </div>
  <!-- TradingView Widget END -->
       
        
    </main>
</body>
</html>