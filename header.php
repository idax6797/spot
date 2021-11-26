<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>SPOT</title>

    <?php wp_head();?>
</head>

<img class="background-spot-logo" src="http://localhost:8888/spot/wp-content/uploads/2021/11/background-spot.png" alt="SPOT logo">

<body>
    <section class="graphics-top">
        <div class="borders">
            <span></span>
            <span></span>
        </div>
        <div class="borders-2">
            <span></span>
            <span></span>
        </div>
    </section>

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
    
