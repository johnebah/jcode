<?php
session_start();
if ($_SESSION['username']=="") {
    header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home  |   &copy;jcode</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripttion" content="Jcode learning center for all type of programming language">
        <meta property="og:title" content="Learn all basic kind of programming language">
        <meta property="og:description" content="Jcode learning center for all type of programming language">
        <meta property="og:image" content="img/logo.png">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="img/png" href="img/logo.png">
    </head>
    <body>
        <div class="container-fluid">
                    <header class="header">
                        <nav class="nav">
                            <div class="name">
                                <img src="img/logo.png">
                            </div>
                            <div class="toggle">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="nav-link">
                                <ul class="first">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#" id="package">Packages</a>
                                        <ul class="second">
                                            <li><a href="#">Web design</a></li>
                                            <li><a href="#">Web development</a></li>
                                            <li><a href="#">Mobile development</a></li>
                                            <li><a href="#">Automation and AI</a></li>
                                            <li><a href="#">Data science</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-whatsapp"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-telegram"></i>
                            </div>
                        </nav>
                    </header>
                    <section id="admin">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <h1 style="text-align: center; font-family: cursive;">Name of student registered</h1>
                                <div class="detail">
                                    <table><tr>
                                        <td>ID</td><td>Name</td><td>Email</td><td>Mobile</td><td>Course</td><td>Status</td><td>Date</td>
                                    </tr></table>
                                    <table id="users">
                                       
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <form class="form-control" style="padding: 60px; border-radius: 20px; margin-top: 30px;">
                                <p style="color:red; background-color: pink; text-align: center; font-family: cursive;" id="error"></p>
                                    <p><input type="text" placeholder="enter id" class="form-control" name="unique_id"></p>
                                    <p><input type="submit" onclick="register()" value="VERIFY STATUS" class="btn btn-danger btn-lg" style="width: 100%;"></p>
                                </form>
                            </div>
                        </div>
                    </section>
                    <footer>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="container content">
                                    <h1><span>J</span>CODE</h1>
                                    <h4>Learn web and mobile programming here<span>......</span></h4>
                                    <p>Jcode learning center for all type of programming language,<br>making standard
                                    for programmers and digital marketers</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <br><br><br><br>
                                <h3 style="color: white; font-family: cursive;">GET IN TOUCH</h3>
                                <span><i class="fa fa-phone"></i>+234 708 651 7956</span><br><br>
                                <span><i class="fa fa-envelope"></i>directorict@bsum.edu.ng</span><br><br>
                                <span><i class="fa fa-globe"></i>www.bsum.edu.ng</span><br><br>
                                <span><i class="fa fa-map-marker"></i>Km 1, Gboko Road, Makurdi, Benue State, Nigeria.</span><br><br><br>
                                <div class="socials">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-whatsapp"></i>
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-telegram"></i>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <br><br><br>
                                <div class="newsletter-content" style="margin-top: 30px;">
                                    <h3 style="font-weight: bolder; color: white;">SUBSCRIBE</h3>
                                    <h2 style="font-size: 40px; color: white; font-family: cursive;">TO OUR NEWSLETTER</h2>
                                </div>
                                <div class="newsletter-form angle" style="margin-top: 30px;">
                                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" class="form-control" type="email" name="email" placeholder="Enter your email address...">
                                            <button id="mc-submit" type="submit" class="btn btn-primary">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                </div>
                        </div>
                    </footer><br><br>
                    <section id="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-12">
                                    <span style="font-weight: bolder;">Copyright &copy; Jcode learning center for programmers</span>
                                </div>
                                <div class="col-lg-6 col-md-5 col-12">
                                    <div class="column-right">
                                        <span style="float: right ; font-weight: bolder;">Powered by Jcode programmers, Lagos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><br><br>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="admin.js"></script>
</html>