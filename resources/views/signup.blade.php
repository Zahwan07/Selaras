<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selaras Daftar</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">
    @if (session('danger'))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Gagal!!</strong> {{ session('danger') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="card text-center px-5 py-5">
                            <h1 class="h4 text-gray-900 mb-5">Selaras</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bikin Akun Dulu Yuk!!</h1>
                            </div>
                            <form class="user" action="/register" method="POST" role="form">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Username...">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password"  class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Password...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama_lengkap" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Alamat Email">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="no_telp" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-md btn-primary w-100 mt-4 mb-0" value="D A F T A R">
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/js/sb-admin-2.min.js"></script>

</body>

</html>