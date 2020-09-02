<!doctype html>
<html lang="en">
  <head>
    <title>Rekrutmen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
    </head>
    <body>
    
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('') ?>">Cari Loker</a>
            <?php //echo md5('databaru'); ?>
        
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('?pagename=') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('?pagename=cari-loker') ?>">Cari Lowongan</a>
                    </li>

                    <?php if(session()->get('is_login')) : ?>

                        <li class="nav-item mr-2">
                            <a class="rounded-0 btn btn-primary mb-2" href="<?php echo base_url('?pagename=user-dashboard'); ?>">Dashboard</a>
                        </li>
                    
                    <?php else: ?>
                    
                    <li class="nav-item mr-2">
                        <a class="rounded-0 btn btn-warning text-dark mb-2" href="<?php echo base_url('?pagename=register'); ?>">Registrasi</a>
                    </li>

                    <li class="nav-item mr-2">
                        <a class="rounded-0 btn btn-primary text-white mb-2" href="<?php echo base_url('?pagename=login'); ?>">Login</a>
                    </li>

                    <?php endif; ?>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li> -->
                </ul>
            </div>

            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        
    </nav>