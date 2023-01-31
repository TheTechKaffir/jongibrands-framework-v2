<?php $this->view('inc/header') ?>
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="home" class="d-flex align-items-center w-100">
                            <img src="<?= ROOT ?>/assets/img/jb-logo-trans.png" width="340px" alt="Jongibrands Framework Logo">
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">
                            <?php if (message()) : ?>
                                <div class="alert alert-success text-center mt-2"><?= message('', true) ?></div>
                            <?php endif ?>
                            <?php if (!empty($errors['email'])) : ?>
                                <div class="alert alert-danger text-center mt-2"><strong><em><?= $errors['email'] ?></em></strong></div>
                            <?php endif ?>
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                <p class="text-center small">Enter your email & password to login</p>
                            </div>

                            <form method="POST" class="row g-3 needs-validation">

                                <div class="col-lg-6">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="jb-btn-bg-primary text-light w-100" type="submit">Login</button>
                                    <a href="<?= ROOT ?>" class="btn btn-danger w-100 mt-1" type="submit">Cancel</a>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a href="signup">Create an account</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<?php $this->view('inc/footer') ?>