<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Dynamic Web Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" contents="Demo Page">
        <link rel="stylesheet" href="css/style.css?v=<?php echo (rand());?>" type="text/css">
    </head>
    <body> 
        <div id="header">
        <label for="show-menu" class="show-menu"><img src="icons/menu.svg"/></label>
        <input type="checkbox" id="show-menu" role="button">
        <h1>My Web Site</h1>
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=gallery">Gallery</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact Us</a></li>
                </ul>
        </div>
        
           
           
        