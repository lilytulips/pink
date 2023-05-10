<?php
//This file is going to interact with database, so need to include database.php on this file
include 'database.php';
?>
<?php
//Create Select Query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PINK IT!</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <header><h1>pink campaign</h1></header>
        <div id="container">
            <header>
                <div id="border-bottom-short">
                <h2>shout your <b>Pink<i>!</i></b> message to the world!</h2>
                </div>
            </header>
            <div id="shout">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)): ?>
                        <li class="shout"><span><?php echo $row['time']?></span> - <pink><?php echo $row['name']?></pink>: <?php echo $row['message']?></li>
                    <?php endwhile; ?>
            </div>
            <div id="input">
                <?php if(isset($_GET['error'])): ?>
                    <div class="error"><?php echo $_GET['error']; ?></div>
                <?php endif; ?>
            <form method="post" action="process.php">
                <input type="text" name="name" placeholder="your name, milady?" />
                <input type="text" name="message" placeholder="say great things on this pink month!" />
                <br />
                <input class="shout-btn" type="submit" name="submit" value="pink!" />
            </form>
        </div>
        </div>
       
    </body>
</html>