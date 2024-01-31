<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Admin FS Resto</title>
        <link href="../../resource/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3>
                                        <?php
                                            if(isset($_GET['pesan'])){
                                                if($_GET['pesan'] == "belum_login"){
                                                    echo "<p style='color: #f00'>Anda harus login untuk mengakses halaman admin</p>";
                                                }
                                                if($_GET['pesan'] == "gagal"){
                                                    echo "<p style='color: #f00'>Login gagal! username dan password salah!</p>";
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="card-body">
                                        <form action='prosesLogin.php' method='post'>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name ="user" placeholder="masukan username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="pass" placeholder="masukan Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <input type="submit" name="masuk" value="Sign in" style="margin-top:20px" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Fs Resto 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../resource/js/scripts.js"></script>
    </body>
</html>
