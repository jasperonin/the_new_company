<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container-md w-50 mt-5">
        <div class="card">
            <div class="card-header text-center bg-dark text-white">
                Register
            </div>
            <div class="car-body">
                <form action="../actions/register.php" method="post">

                <label for="first_name" class="label-control small">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control mb-3" placeholder="Enter First Name">

                <label for="last_name" class="label-control small">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control mb-3" placeholder="Enter Last Name">

                <label for="username" class="label-control small">Username</label>
                <input type="text" name="username" maxlength="15" id="username" class="form-control mb-3" placeholder="Enter Username">

                <label for="password" class="label-control small">password</label>
                <input type="password" name="password" minlength="8" id="password" class="form-control mb-3" placeholder="Enter Password">

                <input type="submit" value="Register" class="btn btn-outline-success w-100">

                <p class="text-center mt-3 small">Already Registered? <a href="../views/" class="text-decoration-none">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>