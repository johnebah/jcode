<!DOCTYPE html>
<html>
    <head>
        <?php include_once "index/meta.php";?>
    </head>
    <body>
        <div class="container-fluid">
        <?php include_once "index/header.php";?>
                    <section id="banner">
                        <?php include_once "index/banner.php";?>
                    <section id="pricing">
                        <?php include_once "index/pricing.php";?>
                    </section>
                    <section id="register">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="slider">
                                    <img src="img/download (1).jpg" class="animate-1">
                                    <img src="img/OIP (1).jpg" class="animate-2">
                                    <img src="img/OIP (2).jpg" class="animate-3">
                                    <img src="img/OIP (5).jpg" class="animate-4">
                                    <img src="img/OIP (6).jpg" class="animate-5">
                                    <h2>Please Patronize and register!!!</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 style="font-family: cursive; text-align: center;">Fill the form to register below!!</h3>
                                <form class="form-control" style="padding: 60px; border-radius: 20px;">
                                <p style="color:red; background-color: pink; text-align: center; font-family: cursive;" id="error"></p>
                                    <p><input type="text" placeholder="Fullname" class="form-control" name="name"></p>
                                    <p><input type="email" placeholder="Email" class="form-control" name="email"></p>
                                    <p><select class="form-control" name="course">
                                        <option>---Select Course</option>
                                        <option>Web Design</option>
                                        <option>Web Development</option>
                                        <option>App Development</option>
                                        <option>AI,Data science, and Machine learning</option>
                                        <option>Choose to learn a single programming language</option>
                                    </select></p>
                                    <p><input type="text" placeholder="Mobile No." class="form-control" name="mobile"></p>
                                    <p><input type="submit" value="REGISTER" class="btn btn-danger btn-lg" style="width: 100%;" onclick="register()"></p>
                                </form>
                            </div>
                        </div>
                    </section>
                    <footer>
                        <?php include_once "index/footer.php";?>
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
    <script type="text/javascript" src="index.js"></script>
</html>