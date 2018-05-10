<!DOCTYPE html>
<html>
<head>
    <title>Clean Up Aberdeen</title>
    <link rel="stylesheet" href="../Style/events.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Clean Up Aberdeen</a></li>
            </ul>

        </div>
    </nav>
</header>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Create an event</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="events-form">
            <input type="text" name="event_name"  placeholder="Event name">
            <input type="text" name="event_location" placeholder="Event location">
            <input type="date" name="date" placeholder="Date">
            <input type="time" name="time" placeholder="Time">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
            <button type="submit" name="submit">Create an event</button>
            </form>
    </div>
</section>

