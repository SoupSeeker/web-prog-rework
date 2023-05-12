<?php
// this router comes from https://github.com/phprouter/main
// helps us define routes and establish what routes are allowed
// (i was working in nodejs so i wanted to have something similar also)
require_once __DIR__.'/router.php';

get('/webproject', '/views/main.html');
get('/webproject/main.html', '/views/main.html');
get('/webproject/register.html', '/views/register.html');
get('/webproject/login.html', '/views/login.html');
get('/webproject/logout.php', '/views/logout.php');

get('/webproject/stockmarket.html', '/views/stockmarket.html');
get('/webproject/stockbasic.html', '/views/stockbasic.html');
get('/webproject/stockbroker.html', '/views/stockbroker.html');
get('/webproject/stockreg.html', '/views/stockreg.html');

get('/webproject/options.html', '/views/options.html');
get('/webproject/basics.html', '/views/basics.html');
get('/webproject/strategy.html', '/views/strategy.html');
get('/webproject/risks.html', '/views/risks.html');

get('/webproject/retirement.html', '/views/retirement.html');
get('/webproject/401k.html', '/views/401k.html');
get('/webproject/roth.html', '/views/roth.html');
get('/webproject/trad.html', '/views/trad.html');

get('/webproject/news.html', '/views/news.html');
get('/webproject/calc.html', '/views/calculator.html');
get('/webproject/watchlist.html', '/views/watchlist.html');

post('/webproject/reg.php', '/views/reg.php');
post('/webproject/auth.php', '/views/auth.php');
post('/webproject/watch.php', '/views/watch.php');

// any will catch GET or POST requests and call 404.php if hit
any('/webproject/404','/views/404.html');




