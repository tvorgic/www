<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body>

    <div class="grid-container">
        <?php

        require_once 'izbornik.php'; ?>
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <div class="callout" id="tijelo">
                    <?php
                    //dsn = data source name
                    $dsn = 'mysql:host=localhost;dbname=edunovapp26;charset=utf8';
                    ?>
                </div>
            </div>
            <?php include_once 'podnozje.php'; ?>
        </div>


    </div>


    <?php include_once 'skripte.php'; ?>

</html>