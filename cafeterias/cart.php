<!DOCTYPE html>
<html lang="en">
        <?php include 'modules/header-info.php'; ?>
    <body class=" ">

        <a id="start"></a>
        <?php include 'modules/main_nav.php'; ?>            
            
            <section>
                <div class="container">
                    <form class="cart-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="product-1">
                                    <div class="product__controls">
                                        <div class="col-xs-3">
                                            <label>Quantity:</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" name="quantity" value="1" placeholder="QTY" />
                                        </div>
                                        <div class="col-xs-3 text-right">
                                            <button class="checkmark checkmark--cross bg--error"></button>
                                        </div>
                                    </div>
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
                                <div class="product-1">
                                    <div class="product__controls">
                                        <div class="col-xs-3">
                                            <label>Quantity:</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" name="quantity" value="1" placeholder="QTY" />
                                        </div>
                                        <div class="col-xs-3 text-right">
                                            <button class="checkmark checkmark--cross bg--error"></button>
                                        </div>
                                    </div>
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
                                <button type="submit" class="btn">Update Cart</button>
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
                            <div class="col-md-2 col-md-offset-10 text-right text-center-xs">
                                <button type="submit" class="btn btn--primary">Proceed &raquo;</button>
                            </div>
                        </div>
                        <!--end of row-->
                    </form>
                    <!--end cart form-->
                </div>
                <!--end of container-->
            </section>


    <?php include 'modules/footer.php'; ?>


    <?php include 'modules/footer-script.php'; ?>

</body>
</html>