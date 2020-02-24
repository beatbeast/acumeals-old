<!DOCTYPE html>
<html lang="en">
        <?php include 'modules/header-info.php'; ?>
    <body class=" ">

        <!-- <a id="start"></a> -->
        <?php include 'modules/login_main_nav.php'; ?>
            <div class="main-container">
                <section class="height-100 imagebg text-center" data-overlay="4">
                    <div class="background-image-holder">
                        <img alt="background" src="images/inner-6.jpg" />
                    </div>
                    <div class="container pos-vertical-center">
                        <div class="row">
                            <div class="col-sm-7 col-md-5">
                                <h2>Login to continue</h2>
                                <p class="lead">
                                    Welcome back, sign in with your existing Acumeals account credentials
                                </p>
                                <form method="POST" action="loginmodule.php">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="email" placeholder="Email" name="email" required/>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="password" placeholder="Password" name="password" required/>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn--primary type--uppercase" type="submit" name="submit" value="submit">Login</button>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </form>
                                <span class="type--fine-print block">Dont have an account yet?
                                    <a href="sign-up.php">Create account</a>
                                </span>
                                <span class="type--fine-print block">Forgot your username or password?
                                    <a href="recover-account.php">Recover account</a>
                                </span>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </section>
            </div>
            <!--<div class="loader"></div>-->
            <!-- <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
                <i class="stack-interface stack-up-open-big"></i>
            </a> -->

        <?php include 'modules/signup_footer.php'; ?>


        <?php include 'modules/footer-script.php'; ?> 

    </body>
</html>