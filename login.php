<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page | edunet</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

</html>
<div class="container wrapper d-flex align-items-center flex-column justify-content-center">
    <div class="row">
        <div class="col-lg-7 ">
            <img src="assets/images/logo.png" alt="" width="40%">
            <p class="h5 text-muted mb-4">EduNEt is an Educational network help you to connet and shere <br>
                student & teacher</p>
                <div class="mt-5">
            <?php
            include_once "includes/footer.php";
            ?>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="bg-white card">
                <div class="card-body px-3">
                    <h3 class="text-warning fw-bolder text-capitalize p-1">Login Here</h3>
                    <hr>
                    <form action="" method="post">
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Email</label>
                                <input type="email" name="email" placeholder="Eg.email12@gamil.com"
                                    class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="" class="small text-muted">Password</label>
                                <input type="password" name="password" placeholder="Eg.password@12"
                                    class="form-control rounded-0">
                            </div>
                        </div>
                        <input type="submit" value="Login" name="create_account"
                            class="btn btn-success w-100 rounded-lg">

                </div>
                <div class="d-flex justify-content-between p-2 ">
                    <a href="signup.php" class=" fw-bolder">Creat New Account</a>
                    <a href="login.php" class=" fw-bolder">Forget Password</a>

                </div>
            </div>

            </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>