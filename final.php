 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<h1>Administration de votre site</h1>
    <?php
    if (isset($_GET['admin']) && 1 === (int)$_GET['admin']) {
        ?>
        <p class="greetings">
            <?php
            if (isset($_GET['name'])) {
                echo sprintf("Bienvenue sur l'administration de votre site %s", $_GET['name']);
            }
            ?>

       <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur
        </p>