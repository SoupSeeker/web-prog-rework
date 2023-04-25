<?php
// this router comes from https://github.com/phprouter/main, includes CSRF and XSS protections
require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GETs
// In the URL -> http://localhost
get('/', '/views/main.php');
get('/main.html', '/views/main.php');
get('/register.html', '/views/register.php');
get('/login.html', '/views/login.php');
get('/logout.php', '/views/logout.php');

get('/stockmarket.html', '/views/stockmarket.php');
get('/stockbasic.html', '/views/stockbasic.php');
get('/stockbroker.html', '/views/stockbroker.php');
get('/stockreg.html', '/views/stockreg.php');

get('/options.html', '/views/options.php');
get('/basics.html', '/views/basics.php');
get('/strategy.html', '/views/strategy.php');
get('/risks.html', '/views/risks.php');

get('/retirement.html', '/views/retirement.php');
get('/401k.html', '/views/401k.php');
get('/roth.html', '/views/roth.php');
get('/trad.html', '/views/trad.php');

get('/news.html', '/views/news.php');
get('/calc.html', '/views/calculator.php');
get('/dashboard.html', '/views/dashboard.php');

post('/reg.php', '/views/reg.php');
post('/auth.php', '/views/auth.php');

// any will catch GET or POST requests and call 404.php if hit
any('/404','views/404.php');
// ####################################
// #######  helpful methods below #####
// ####################################

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php

// get('/user/$id', 'views/user');

// Dynamic GET. Example with 2 variables
// The $name will be available in full_name.php
// The $last_name will be available in full_name.php
// In the browser point to: localhost/user/X/Y

// get('/user/$name/$last_name', 'views/full_name.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php

// get('/product/$type/color/$color', 'product.php');

// A route with a callback

//get('/callback', function(){
//  echo 'Callback executed';
//});

// A route with a callback passing a variable
// To run this route, in the browser type:
// http://localhost/user/A

//get('/callback/$name', function($name){
//  echo "Callback executed. The name is $name";
//});

// A route with a callback passing 2 variables
// To run this route, in the browser type:
// http://localhost/callback/A/B

//get('/callback/$name/$last_name', function($name, $last_name){

//  echo "Callback executed. The full name is $name $last_name";

//});



