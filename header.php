<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/utils/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <title>Meu Portfolio - Jonas Borges</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <nav class="mainMenu">
        <?php wp_nav_menu(array('theme_location' => 'my_main_menu'))?>
    </nav>

    <div class="layout">
        <main class="container">