<!doctype html>
<html lang="en">
  <head>
    <title>Selamat datang di halaman login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="d-flex justify-content-center align-items-center vh-100">
        <?php $message = session()->flash('message'); ?>

        

        <form action="<?php echo base_url('?pagename=admin-login-check'); ?>" method="POST">
            <?php if($message) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            <h4>Silahkan lanjut untuk memulai</h4>
            <div class="form-group">
                <label for="i-username">Username</label>
                <input type="text" name="username" class="form-control" id="i-username">
            </div>

            <div class="form-group">
                <label for="i-password">Password</label>
                <input type="password" name="password" class="form-control" id="i-password">
            </div>

            <button class="btn btn-primary">Login</button>

        </form>

    </div>
    
  </body>
</html>