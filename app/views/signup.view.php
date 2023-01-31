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
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                  <form method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-lg-6">
                      <label for="yourName" class="form-label">Your Full Name</label>
                      <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control <?= !empty($errors['name']) ? 'border-danger' : ''; ?>" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                      <?php if (!empty($errors['name'])) : ?>
                        <div>
                          <small class="text-danger"><strong><em><?= $errors['name'] ?></em></strong></small>
                        </div>
                      <?php endif ?>
                    </div>
                    <div class="col-lg-6">
                      <label for="yourUsername" class="form-label">Username</label>
                      <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control <?= !empty($errors['username']) ? 'border-danger' : ''; ?>" id="yourUsername" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                      <?php if (!empty($errors['username'])) : ?>
                        <div>
                          <small class="text-danger"><strong><em><?= $errors['username'] ?></em></strong></small>
                        </div>
                      <?php endif ?>
                    </div>
                    <div class="col-lg-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control <?= !empty($errors['email']) ? 'border-danger' : ''; ?>" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      <?php if (!empty($errors['email'])) : ?>
                        <small class="text-danger"><strong><em><?= $errors['email'] ?></em></strong></small>
                      <?php endif ?>
                    </div>
                    <div class="col-lg-6">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control <?= !empty($errors['password']) ? 'border-danger' : ''; ?>" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                      <?php if (!empty($errors['password'])) : ?>
                        <small class="text-danger"><strong><em><?= $errors['password'] ?></em></strong></small>
                      <?php endif ?>
                    </div>
                    <div class="col-lg-6">
                      <label for="repeatPassword" class="form-label">Repeat Password</label>
                      <input type="password" name="repeatPassword" value="<?= set_value('repeatPassword') ?>" class="form-control" id="repeatPassword" required>
                      <div class="invalid-feedback">Please re-type your password!</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input <?= set_value('terms') ? 'checked' : ''; ?> class="form-check-input" name="terms" value="1" type="checkbox" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                        <?php if (!empty($errors['terms'])) : ?>
                          <small class="text-danger"><strong><em><?= $errors['terms'] ?></em></strong></small>
                        <?php endif ?>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-success text-light w-100" type="submit" name="userSignup">Create Account</button>
                      <a href="<?= ROOT ?>" class="btn btn-danger w-100 mt-1" type="submit">Cancel</a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>