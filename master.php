<?php
     session_start(); 
     if (isset($_SESSION['user'])) {
        $user=$_SESSION['username']."<br/><a href='Logout.php'>Log Out</a>";
     } else {
        $user="<a href='Login.php'>Log In</a>";
     }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Game Reviewer</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="assets/css/master.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="Default.php">
            <img class="navbar-logo" src="assets/images/logo2.png"/>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Default.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/Category.php?cat=PC">PC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/Category.php?cat=XBOX">XBOX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/Category.php?cat=Playstation">Playstation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/Category.php?cat=Nintendo">Nintendo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/Category.php?cat=Others">Others</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/List.php">Your List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/GameReviewer/About.php">About</a>
                </li>
            </ul>
            <img class="right-login-img" src="assets/images/user.png"/>
            <div class="right-login" id="Userdata" > <?= $user ?> </div>
        </div>
    </nav>

      <div><?php echo $content; ?></div>

      <section class="footer ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <img class="footer-image" src="assets/images/logo2.png" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <p style="color:white;">Copyright &copy; GameReviewer All Rights Reserved</p>
            </div>
        </div>
    </section>
</body>
</html>