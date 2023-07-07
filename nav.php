<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php main2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="nav.css">
    
</head>


<body>
    <?php
session_start();
    echo '<nav>
        <div class="container h-nav">
            <div class="leftcont v-class">
                <ul>
                    <li><a href="main.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="update.php">UPDATE</a></li>
                    <li><a href="delete.php">DELETE</a></li>
                </ul>
            </div>


            <div class="cont2">
            <div class="rightcont v-class">
            <ul>';
                    ?>

                        <div class="button day-theme" onclick="setTheme('day')">Day</div>
                        <div class="button night-theme" onclick="setTheme('night')">Night</div>
                    </ul>
                </div>
            </div>

            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </nav>
</body>
<script src="main.js"></script>

</html>