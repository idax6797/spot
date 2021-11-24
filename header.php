<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPOT</title>

    <?php wp_head();?>
</head>
<body>

<header>
    <input id="burger" type="checkbox" />

    <label for="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <nav class="menu">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
            )
        );?> 
    </nav>      
</header>
    
