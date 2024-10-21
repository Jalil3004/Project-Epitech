<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/signin.css">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="default.asp">Home</a></li>
        <li><a href="news.asp">News</a></li>
        <li><a href="contact.asp">Contact</a></li>
        <li><a href="about.asp">About</a></li>
    </ul>
    <form id="login__form" method="post">
        <div>
            <label>Pseudo or Email:</label>
            <input type="text" id="login__fields" name="nickname_email">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" id="login__fields" name="pass">
        </div>
        <button type="submit" id="login__button">Login</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../Ajax/login_ajax.js"></script>
</body>

</html>