<!DOCTYPE html>
<html>
<head>
    <title>Clean Up Aberdeen</title>
    <link rel="stylesheet" href="../Style/signUp.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Clean Up Aberdeen</a></li>
            </ul>
            <div class="nav-login">
                <form>
                    <input type="text" name="username" placeholder="Username or email">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>
                <a href="signUp.php">Sign up</a>
            </div>

        </div>
    </nav>
</header>

<section class="main-container">
    <div class="main-wrapper">
        <form class="signUp-form" action="signUp.inc.php" method="post">
            <input type="text" name="first" placeholder="Forename">
            <input type="text" name="last" placeholder="Surname">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</section>
</body>
</html>

