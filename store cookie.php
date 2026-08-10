<?php

if(isset($_COOKIE['visitor']))
{
    echo "Welcome Back! You are a returning user.";
}
else
{
    setcookie("visitor","yes",time()+86400*30);
    echo "Welcome! You are a new user.";
}

?>