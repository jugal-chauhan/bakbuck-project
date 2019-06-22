<?php
    require "jheader.php";
?>

    <main>
        <h1>Signup</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholders="Username">
            <input type="text" name="mail" placeholders="Email">
            <input type="password" name="pwd" placeholders="Password">
            <input type="password" name="pwd-repeat" placeholders="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>

<?php
    require "jfooter.php";
?>