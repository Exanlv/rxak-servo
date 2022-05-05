<?php

use Rxak\Framework\Config\Config;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="<?= pub('assets/css/main.css') ?>" rel="stylesheet">

    <title><?= $this->title ?></title>
</head>

<body>
    <div class="container" style="height: 800px">
        <?= $this->body ?>

        <i class="bi bi-alarm-fill"></i>
    </div>

    <div class="container-fluid bg-servo-dark">
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-3">
                <div class="card bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Servo Network aims for a better community and quality content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title">Socials</h5>
                        <p class="card-text">I wasn't told what socials were actually used so I just added some icons below.</p>

                        <a target="_blank" href="<?= Config::get('socials.twitter') ?>"><i class="bi bi-twitter"></i></a>
                        <a target="_blank" href="<?= Config::get('socials.twitch') ?>"><i class="bi bi-twitch"></i></a>
                        <a target="_blank" href="<?= Config::get('socials.discord') ?>"><i class="bi bi-discord"></i></a>
                        <a target="_blank" href="<?= Config::get('socials.youtube') ?>"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-3">
                <div class="card bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Have issues? <a href="mailto:servonetworkmc@gmail.com">Email us</a>, or join our <a href="https://discord.gg/q6DRebJs2U">discord</a> for support.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card bg-transparent text-center">
                    <div class="card-body">
                        <h5 class="card-title">Built with love</h5>
                        <p class="card-text">Built with love by Max using Rxak, a lil framework. I dont know what to put here so here's a shameless plug.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>