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

        <h1>Stock Brokers</h1>
        <div id="first"><img src="../assets/images/broker.jpg" width="800" height="600"></div>
        <br>
        <div id="content">
            <h2>Where can I trade?</h2>
            <p>There are several stock brokers you can choose to get started investing. Each comes with its own strengths and weaknesses depending on your financial goals. It is important to consider your options before opening an account with any broker.</p>
            <h2>Robinhood</h2>
            <p>Robinhood is one of the most popular online broker that offers commission-free trading for stocks, ETFs, options, and cryptocurrencies. It is well known for its easy-to-use mobile app and simple interface. However, Robinhood has faced controversy for its business model and customer service. Specifically, Robinhood makes its money by doing front running, which is a broker strategy where they purchase a stock for you at a fractionally better price and then sell it to you for a very small percent higher. If you buy a stock for $1, they may get the stock for $0.995 and take that half cent profit.</p>
            <h2>Fidelity</h2>
            <p>Fidelity is a well-established brokerage firm that offers a wide range of investment options, including stocks, bonds, mutual funds, and ETFs. It is widely used for its low fees, excellent customer service, and educational resources. Unlike Robinhood, Fidelity does not front run their clients but instead charges a small service fee when selling stocks or options.</p>
            <h2>TD Ameritrade</h2>
            <p>TD Ameritrade is a well known brokerage that offers a very powerful platform that enables its users to access market research tools. It is possible to do technical trading and quant-analysis with TD, which may not be possible with platforms like Robinhood.</p>
            <h2>Interactive Brokers</h2>
            <p>Interactive Brokers is another highly technical trading platform that offers powerful trading tools. It offers low fees and a highly advanced trading platform that gives its investors access to some of the best data in the market. Like many other brokers, Interactive Brokers also offers a powerful trading API that developers can integrate into their software to make algorithmic trading programs.</p>
            <h3>Next, learn about <a href="stockreg.html">the rules and regulations of the stock market</a></h3>
        </div>

    </main>

</body>

</html>
