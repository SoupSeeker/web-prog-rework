<?php
//used this resource to get this working: https://github.com/phprouter/main
//the purpose of the router is to simplify our code and allow us to more easily add a defined route to our code
//removed some of the extra code that we don't need from the file

session_start();        //either use the PHPSESSID we have, or make a new one

//if we GET a request at $route, it will send the request 
//to $path_to_include, which comes from our views folder
function get($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ route($route, $path_to_include); }  
}
function post($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ route($route, $path_to_include); }    
}
function put($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'PUT' ){ route($route, $path_to_include); }    
}
function patch($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'PATCH' ){ route($route, $path_to_include); }    
}
function delete($route, $path_to_include){
  if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ route($route, $path_to_include); }    
}
//this any() function is what we use to capture any 404 errors
function any($route, $path_to_include){ route($route, $path_to_include); }

function route($route, $path_to_include){
  $callback = $path_to_include;
  if(!is_callable($callback)){            
    if(!preg_match('/\.php$|\.html$/', $path_to_include)){                  //we can route to either .html or .php files
      $path_to_include .= '.php';
    }
  }
   
  if($route == "/webproject/404"){
    include_once __DIR__."/$path_to_include";
    exit();
  }  
  $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);  //helps protect against XSS by removing `dangerous` characters
  $request_url = rtrim($request_url, '/');                                  //remove trailing '/' from end of url
  $request_url = strtok($request_url, '?');                                 //this will tokenize the parameters we pass, if any
  $route_parts = explode('/', $route);                                      //next two lines will split the url into substring arrays with '/' as delim
  $request_url_parts = explode('/', $request_url);
  array_shift($route_parts);                                                //array_shift will remove the first element of the array from the route_parts/request_url_parts
  array_shift($request_url_parts);                                          //so if our request is localhost/webproject/main.htlm, it will only put [webpage] and [main.html] in the array
  if( $route_parts[0] == '' && count($request_url_parts) == 0 ){            //if accessing the root element (route parts / request_url_parts are both empty)
    // Callback function
    if( is_callable($callback) ){                                           //if the user provided a function to execute, call it, otherwise this is invalid request and we exit
      call_user_func_array($callback, []);
      exit();
    }
    include_once __DIR__."/$path_to_include";
    exit();
  }
  if( count($route_parts) != count($request_url_parts) ){ return; }         //check to make sure route_parts and request_url_parts have same number of elements, checks for malformed requests
  $parameters = [];
  for( $i = 0; $i < count($route_parts); $i++ ){
    $route_part = $route_parts[$i];
    if( preg_match("/^[$]/", $route_part) ){                                //check if the beginning of the route_part is '$'
      $route_part = ltrim($route_part, '$');                                //trim off the $ if found
      array_push($parameters, $request_url_parts[$i]);                      //push it into the $request_url_parts
      $$route_part=$request_url_parts[$i];
    }
    else if( $route_parts[$i] != $request_url_parts[$i] ){
      return;
    } 
  }
  // Callback function
  //if( is_callable($callback) ){
  //  call_user_func_array($callback, $parameters);
  //  exit();
  //}
  include_once __DIR__."/$path_to_include";
  exit();
}
?>