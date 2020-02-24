<!DOCTYPE html>
<html lang="en">
        <?php include 'modules/header-info.php'; ?>
    <body class=" ">

        <a id="start"></a>
        <?php include 'modules/signup_main_nav.php'; ?>
        </section>
        <div class="tab__content">
                            <section class="space--xs imageblock switchable feature-large  bg--dark">
                                <div class="imageblock__content col-md-5 col-sm-4 pos-right">
                                    <div class="background-image-holder" style='background-position: initial; background-image: url("images/inner-7.jpg"); background-repeat: repeat; background-attachment: scroll; opacity: 1; background-clip: border-box; background-origin: padding-box; background-size: auto; background-color: transparent;'>
                                        <img alt="image" src="images/inner-7.jpg">
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-7">
                                            <h2>Create an Acumeals account</h2>
                                            <span>Already have an account?
                                                <a href="#">Sign In</a>
                                            </span>
                                            <hr class="short">
                                            <form method="POST" action="registerre.php">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <input name="name" type="text" placeholder="Your Name">
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input name="username" type="text" placeholder="Your Username">
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input name="email" type="email" placeholder="Email Address">
                                                    </div>
                                                    <!-- <div class="col-xs-12">
                                                        <input type="file" name="profile_picture" placeholder="Upload your Profile Picture">
                                                    </div> -->
                                                    <div class="col-xs-12">
                                                        <input name="password" id="password" type="password" placeholder="Password">
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input name="password_confirm" id="password_confirm" type="password" placeholder="Confirm Password">
                                                    </div>
                                                    <div class="form-group" id='message'></div>
                                                    <div class="col-xs-12">
                                                        <div class="input-checkbox">
                                                            <input name="agree" id="input-assigned-5" type="checkbox">
                                                            <label for="input-assigned-5"></label>
                                                        </div>
                                                        <span>Remember Me</span>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <button class="btn btn--primary" type="submit" name="submit" value="submit">Create Account</button>
                                                    </div>
                                                    <hr>
                                                    <div class="col-xs-12">
                                                        <span class="type--fine-print">By signing up, you agree to the
                                                            <a href="#">Terms of Service</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>
                        </div>
                            </section>
                        </div>


        <?php include 'modules/signup_footer.php'; ?>


        <?php include 'modules/footer-script.php'; ?> 
        <!-- <script type="text/javascript">
			var check = function() {
				if (document.getElementById('password').value ==
					document.getElementById('password_confirm').value) {
					document.getElementById('message').style.color = 'green';
					document.getElementById('message').innerHTML = '';
				} else {
						document.getElementById('message').style.color = 'red';
					document.getElementById('message').innerHTML = 'Password does not match';
				}
			}
		</script> -->

</body>
</html>