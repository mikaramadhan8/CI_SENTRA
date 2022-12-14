<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>
        body{
            background-position: center;
            background-size: cover;
            background-image: url(https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80);
        }
        .kotak{
            margin: 5% auto;
            width: 40%;
            padding: 5%;
            border-radius: 5%;
            background-color: whitesmoke;
            text-align: right;
        }
        
        
    </style>
</head>
<body>

    


<div class="kotak">

    <h2 class="text-center mb-5">Login</h2>
<form action="<?=base_url(); ?>index.php/login/proses" method="post">
    
    <!-- menampilkan alert menggunakan flash_data() -->
    <?php
    if( $this->session->flashdata('logout') == TRUE):
    ?>
    <div class="alert alert-success text-center" role="alert">Logout Berhasil, Silahkan Login Kembali</div>
    
    
    <?php endif; ?>
    <?php
    if( $this->session->flashdata('sukses') == TRUE):
    ?>
    <div class="alert alert-success text-center" role="alert">Register Berhasil, Silahkan Login</div>
    
    
    <?php endif; ?>
    <?php
    if( $this->session->flashdata('error') == TRUE):
    ?>
    <div class="alert alert-danger text-center" role="alert">Username atau Password salah</div>
    <?php endif; ?>

    <div class="mb-4">
        <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Last name" autocomplete="off" required>
    </div>
    <div class="mb-4">
        <input type="text" class="form-control" placeholder="Password" name="password" aria-label="Last name" autocomplete="off" required>
    </div>
    <div class="pt-1 mb-4">
        <button class="btn btn-info btn-lg btn-block" style="width: 100%; color:white;" name="submit" type="submit" value="login">Login</button>
    </div>
    <p class="text-start">Belum Memiliki Akun?<a href="<?= base_url(); ?>index.php/register"> Register</a></p>

</div>
    
    
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>