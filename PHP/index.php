<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clean Up Aberdeen</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/styleMainCont.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="CreateAnEvent.php">Create an event</a></li>
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
    <h2>Events</h2>
    <?php
    if (isset($_SESSION['u_id'])){
        echo "You are logged in!";
    }
    ?>
    <div class="component events-summary" id="event-listings">
        <ul class="event-listings ">
            <li class="with-date">
                <strong>
                    <time datetime="2018-05-09T19:00:00+0100">Wednesday 09 May 2018</time>
                </strong>
            </li>

            <title="Wednesday 09 May 2018">
            <time datetime="2018-05-09T19:00:00+0100"></time>
            <class="event-name"><a>Aberdeen Beach</a>
    </div>
</div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34624.42823150203!2d-2.1368742351922174!3d57.15369932616542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4884054c1fd77549%3A0xe8bb05da5cf4c472!2sAberdeen!5e0!3m2!1sen!2suk!4v1525533606268" width=100% height="600" frameborder="0"  allowfullscreen></iframe>
    </div>
</section>

