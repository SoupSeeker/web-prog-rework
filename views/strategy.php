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

        <h1>Options Strategies</h1>
        <div id="first">
            <img src="../assets/images/option-strategy.png" width="700" height="400">
        </div>
        <br>
        <div id="content">
            <p>Stock options can be complicated to trade. It is very important to have an idea of a strategy before you decide to buy or sell any option contract. Each strategy has a particular setup that is required to make the strategy effective in protecting your assets.</p>
            <h2>Covered Calls</h2>
            <p>This strategy involves selling a call option on a stock that you own. Your goal here is to sell a call option for the premium and have the option expire such that you get to keep your underlying stock and the option premium. A call option expires worthless if the price of the stock is lower than the strike price by the expiration date specified in the option contract.</p>
            <h2>Cash Secured Puts</h2>
            <p>This strategy is the mirrored opposite of the covered call. In this method, you would be selling a put option while maintaining an adequite amount of cash in your account that could be used in the event of an option execution. If executed, the put option would require you to purchase the underlying stock at the strike price, which would be secured with your brokerage cash.</p>
            <h2>Protective Puts</h2>
            <p>This strategy can be thought of as a type of insurance on a stock you already own. When you buy a put option on a stock you already own, you can execute that put option in order to sell your underlying stock at the strike price specified, thus allowing you to protect yourself from runaway losses.</p>
            <h2>Long Calls / Puts</h2>
            <p>In options trading, going long essentially just means buying a call or put option on a stock that you believe will eventually go up or down in price, respectively. In a long call, you are betting that the stock price will approach or exceed your strike price. In a long put, you are betting that the stock price will eventually fall to or past your strike price. It should be noted that these options are not protected in any way, and can be thought of as a form of gambling.</p>
            <h2>The Wheel</h2>
            <p>This strategy involves a long dated cycle of covered calls and cash secured puts. In the wheel, you begin by purchasing 100 shares of the stock of choice and selling a covered call option at a strike price / expiration date you are comfortable with. You collect the premium from selling the call option and continue to do so until the stock price rises past the strike price, and your option is executed. If this happens, you gain the cash from selling your stock at the strike price and begin selling cash secured puts, continuing to collect options premium until the stock price drops past the strike price. Once your cash secured put option gets executed, you now have regained the 100 underlying shares again and can continue to sell covered calls once again. Thus, this strategy of selling covered calls and cash secured puts is called the wheel because of its continuous cycle of collecting premium despite owning or not owning the stock.</p>
            <h3>These are just a few of the basic options strategies that traders use, if you'd like to learn more complex strategies, head over to <a href="https://www.investopedia.com/trading/options-strategies/" target="_blank">Investopedia</a></h3>
            <h3>Be sure to be considerate of <a href="risks.html">Options Risks</a></h3>
        </div>

    </main>



</body>

</html>
