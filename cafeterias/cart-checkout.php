<!DOCTYPE html>
<html lang="en">
        <?php include 'modules/header-info.php'; ?>
    <body class=" ">

        <a id="start"></a>
        <?php include 'modules/main_nav.php'; ?>



            <div class="main-container">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Checkout</h1>
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Shop</a>
                                </li>
                                <li>Checkout</li>
                            </ol>
                            <hr>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <form class="cart-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product">
                                    <span class="label">QTY: 1</span>
                                    <img alt="Image" src="img/product-small-8.png" />
                                    <div>
                                        <h5>Canon 550D</h5>
                                        <span> 18MP DSLR Camera</span>
                                    </div>
                                    <div>
                                        <span class="h4 inline-block">$849</span>
                                    </div>
                                </div>
                            </div>
                            <!--end item-->
                            <div class="col-sm-4">
                                <div class="product">
                                    <span class="label">QTY: 1</span>
                                    <img alt="Image" src="img/product-small-4.png" />
                                    <div>
                                        <h5>Microsoft Surface</h5>
                                        <span> 256GB Core i7</span>
                                    </div>
                                    <div>
                                        <span class="h4 inline-block">$1399</span>
                                    </div>
                                </div>
                            </div>
                            <!--end item-->
                        </div>
                        <!--end of row-->
                        <div class="row">
                            <div class="col-md-2 col-md-offset-10 text-right text-center-xs">
                                <button type="submit" class="btn">Revise Cart</button>
                            </div>
                        </div>
                        <!--end of row-->
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-md-offset-2 cart-customer-details">
                                <h4>Billing Details</h4>
                                <p>Already a customer?
                                    <a href="#">Log in here</a>
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name:</label>
                                        <input type="text" name="name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Surname:</label>
                                        <input type="text" name="surname" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Company Name:</label>
                                        <input type="text" name="company" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email Address:</label>
                                        <input type="email" name="email" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Country:</label>
                                        <div class="input-select">
                                            <select name="country">
                                                <option selected="" value="Default">Select Country</option>
                                                <option value="Australia">Australia</option>
                                                <option value="China">China</option>
                                                <option value="India">India</option>
                                                <option value="UK">United Kingdom</option>
                                                <option value="USA">United States</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>State:</label>
                                        <div class="input-select">
                                            <select name="state">
                                                <option selected="" value="Default">Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Street Address:</label>
                                        <input type="text" name="apt" placeholder="Apartment / Suite No." />
                                        <input type="text" name="street" placeholder="Street Address" />
                                        <input type="text" name="town" placeholder="Town / Suburb" />
                                        <input type="text" name="postcode" placeholder="Post Code" />
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-checkbox">
                                            <input type="checkbox" name="account" />
                                            <label></label>
                                        </div>
                                        <span>
                                            <a href="#">Create an account</a>
                                        </span>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Additional instructions (optional):</label>
                                        <textarea rows="4" name="instructions"></textarea>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                        </div>
                        <!--end of row-->
                        <div class="row mt--2">
                            <div class="col-sm-12">
                                <div class="boxed boxed--border cart-total">
                                    <div>
                                        <div class="col-xs-6">
                                            <span class="h5">Cart Subtotal:</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span>$989.98</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-6">
                                            <span class="h5">Shipping (US):</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span>$39</span>
                                        </div>
                                    </div>
                                    <hr />
                                    <div>
                                        <div class="col-xs-6">
                                            <span class="h5">Total:</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span class="h5">$1,028.98</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of row-->
                        <div class="row">
                            <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 text-right text-center-xs">
                                <button type="submit" class="btn btn--primary type--uppercase">Checkout</button>
                            </div>
                        </div>
                        <!--end of row-->
                    </form>
                    <!--end checkout form-->
                </div>
                <!--end of container-->
            </section>
        <?php include 'modules/footer.php'; ?>


        <?php include 'modules/footer-script.php'; ?>

</body>
</html>