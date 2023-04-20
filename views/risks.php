<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>papertradr</title> 
    <link rel="stylesheet" href="../assets/styles/invest_info.css">  <!-- can we use some fun js libraries? anime.js or p5.js maybe-->
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
                <li><a href="login.html">Login</a></li> |
                <!--<li><a href="news">News</a></li>-->
                <!--<li><a href="retirement"> Retirement</a></li>-->  
            </ul>
        </nav>
        <br>

        <h1>Options Risks</h1>
        <div id="first">
            <img src="../assets/images/risky.png" width="700" height="500"></div>
        <br>

        <div id="content">
            <p>Stock options come with inherent financial risks by their very nature. It is absolutely vital that you understand these risks and take all factors into account before ever deciding to buy or sell any stock option. Please never risk any money you aren't willing or able to lose. Lives are lost every year because of unneccessary misunderstandings of risks in options trading; if you or someone you know has a problem with gambling, please refrain from haphazardly using options as a financial instrument.</p>
            <h2>Market Risks</h2>
            <p>Stock options are heavily tied to a stocks price, which is subject to the volatility of the stock market as a whole. Stock prices may suddenly drop or rise unexpectedly without warning or reason. It is not uncommon to see massive inter-day price swings as a result of factors unrelated to the stock market. It is crucial to be aware of the ways that global events can impact the stock market before making any risky trades. While volatility can be a factor in making bigger profits, it can also contribute to massive losses.</p>
            <h2>Time Decay</h2>
            <p>Stock options have a few attributes, besides the stock price, that impact the price of an option contract. One of the big factors to incorporate into your risk management is the concept of theta (time) decay. As a stock option approaches its expiration date, it will begin to bleed off value in the form of theta decay. Once a stock option reaches its expiration date, it will either be executed or will expire worthless depending on whether or not the strike price of the option is greater than or less than the stocks current price respectively. It is crucial to take into account the time remaining before an option expires. Closer to expiration date is inherently more risky, as an option one day from expiry is either going to lose all of its value or be executed.</p>
            <h2>Option Execution</h2>
            <p>Stock option contracts each represent 100 shares of the given stock. This means that each optino represents a much larger financial investment than the option price may lead on. For example, an option for company XYZ may be $1.00 per share which would mean the price of the option is $100. If the company XYZ's stock price is $250, then that stock option in reality represents $250 x 100 = $25000 when executed. If you are the owner of a call option with a strike price of $240 at the time it expires, you will be required to purchase 100 shares of XYZ for $240 each. Regardless of whether you have the cash on hand to make that deal or not, you will be liable for that purchase. Similarly, if you decided to sell a call option on XYZ and do not own the 100 underlying shares when it gets executed, you will be required to purchase 100 shares of XYZ at whatever the current price is and sell them off to the option holder at $240 each. This can spell out massive financial disaster for inexperienced options traders. Furthermore, an option holder has the ability to execute their option contract before the expirey date, adding even more risk to option sellers.</p>
            <h2>Liquidity Risks</h2>
            <p>You may want to trade options on one of your favorite companies, but may find it difficult when the company has a limitted amount of interest. If a company is not traded very often, options traders can be few and far between. Purchasing call options on a company with very low daily volume can make it very difficult to find a buyer or seller for your option. You may end up in a situation where you are stuck with a given option and cannot sell your option because there are no buyers available. All options are a two party interaction: buyer and seller, writer and holder. It is important to examine all of the technical factors of a stock before deciding to buy or sell any option.</p>
        </div>

    </main>



</body>

</html>
