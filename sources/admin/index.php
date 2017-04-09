<?php
    if(!isset($_COOKIE['admin']))
    {
        include 'html/index.html';
    }
    else
    {
        include 'html/login.html';
    }
?>