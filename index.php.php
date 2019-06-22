<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>

        </head>
        <body>

            <header>
                <nav>
                <!-- <a href="#"> -->
                    <img src="img/logo.jpeg" alt="logo">
                <!-- </a> -->
                <u1>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Menu</a></li>
                </u1>
                <div>
                    <form action="includes/login.inc.php" methods="post">
                        <input type="text" name="mailuid" placeholder="Username/Email">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
                </nav>
            </header>
        </body> 