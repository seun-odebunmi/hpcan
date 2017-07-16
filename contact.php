<?php $page = "contact"; include('includes/header.php'); ?>

        <section id="main">
            <div class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title">Contact Us</h2>
                            <p>
                                If you have comments or questions or want more information about HPCAN, you can contact us using our online form below. We want to hear from you.
                            </p>
                            <p>
                                Fields marked with an<span class="red">*</span> are required.
                            </p>
                            <form class="form-horizontal" method="post" action="includes/contactProcessor.php">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label required">First Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="firstname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label required">Last Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="lastname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label required">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone Number</label>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="phonenumber" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label required">Comments</label>
                                        <div class="col-md-6">
                                            <textarea name="comments" class="form-control" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include('includes/footer.php') ?>