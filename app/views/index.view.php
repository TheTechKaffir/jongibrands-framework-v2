<?php $this->view('inc/header') ?>


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Home Page</h1>
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-lg-6">
            <h4>Hello, <?= Auth::getName() ?></h4>
        </div>
        <div class="col-lg-6 text-right">
            <a class="btn btn-danger" href="<?= ROOT ?>/logout" class="mt-1">LOGOUT</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <img src="<?= ROOT ?>/assets/img/jb-framework-logo.png" alt="Jongi Brands Logo">
            <img src="<?= ROOT ?>/assets/img/jb-logo-trans.png" alt="Jongi Brands Logo">
        </div>
    </div>
    <hr>
    <p class="text-justify">
        Congratulations, and welcome to <?= APP_NAME ?>. <?= APP_NAME ?> is <?= APP_DESCRIPTION ?>. Developed by <?= APP_AUTHOR ?>. <a href="https://jongibrandz.co.za" target="_blank">View Site</a>
    </p>
</div>


<?php $this->view('inc/footer') ?>