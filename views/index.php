<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container-md mt-5 w-50">
        <div class="card">
            <div class="card-header bg-secondary text-center text-white">
                LOGIN
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <label for="username" class="label-form small">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Enter username..">

                    <label for="password" class="label-form small">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Enter Password..">

                    <input type="submit" value="LOGIN" class="btn btn-primary w-100">
                </form>

                <p class="text-center mt-3 small"><a href="./register.php" class="text-decoration-none">Create an Account</a></p>
            </div>
        </div>
    </div>
</body>
</html>