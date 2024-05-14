<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Lead Restaurant &bull; <?php echo $pageTitle ?? "" ?></title>
</head>

<body>
    <header class="header-with-background" style="background-image: url('<?php echo $headerImage ?? "images/default.jpg" ?>'); ">
        <h1>Lead Restaurant</h1>
        <p>Your sanctuary for exceptional flavors</p>
        <nav>
            <?php $pageKey = $pageKey ?? "" ?>
            <a class="<?php if ($pageKey === "mission") echo 'active' ?>" href="index.php">Our mission</a>
            <a class="<?php if ($pageKey === "ingredients") echo 'active' ?>" href="ingredients.php">Our Ingredients</a>
            <a class="<?php if ($pageKey === "menu") echo 'active' ?>" href="menu.php">Menu</a>
        </nav>
    </header>

    <main>