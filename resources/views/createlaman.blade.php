<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Register</title>
        <style>
            html,
            body {
            height: 100%;
            }

            body {
            padding-bottom: 40px;
            background-color: #f5f5f5;
            }

            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }

            .center{
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 5%;
            }

        </style>
    </head>
    <body>
        <img class="center mt-3" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="bootstrap">
        <main class="container form-signin">
            <div class="mb-3">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="signin.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="registerr.php">Register</a>
                    </li>
                    </li>
                </ul>
            </div>
            <form class="text-center">
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" name="konfpassword" id="konfpassword" placeholder="Konfirmasi Password">
                    <label for="konfpassword">Konfirmasi Password</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                    <label for="nama">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    <label for="alamat">Alamat</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nohp" id="nohp" placeholder="No. Handphone">
                    <label for="nohp">No. Handphone</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Register</button>
                <p class="mt-5 mb-3 text-muted">© 2021</p>
            </form>
        </main>
    </body>
</html>