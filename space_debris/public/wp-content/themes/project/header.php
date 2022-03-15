<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Debris</title>
   <?php wp_head();?>
</head>
<body <?php body_class()?>>

<!--header section -->
<header class="header">
        <nav class="navbar">
            <img src="<?=get_template_directory_uri()?>/images/space_debris_logo.png" alt="space debris" class="logo">
            <?php wp_nav_menu(['container' => 'ul','menu'=>'main']);?>
           
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>
<div class="container">
    
