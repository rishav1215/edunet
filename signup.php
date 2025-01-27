<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

</html>
<div class="container wrapper d-flex align-items-center flex-column justify-content-center">
    <div class="row">
        <div class="col-lg-7 mt-5 justify-content-center">
            <img src="assets/images/logo.png" alt="" width="45%">
            <p class="h5 text-muted mb-4">EduNEt is an Educational network help you to connet and shere <br>
                student & teacher</p>
                <div class="mt-5">
            <?php
            include_once "includes/footer.php";
            ?>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="bg-white card p-1">
                <div class="card-body">
                    <h5 class="text-warning fw-bolder text-capitalize">create An Account</h5>
                    <hr>
                    <form action="signup_action.php" method="post">
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">First Name</label>
                                <input type="text" placeholder="Eg. Rishav" name="firstname"
                                    class="form-control rounded-0">
                            </div>
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Last Name</label>
                                <input type="text" placeholder="Eg. Ranjan" name="lastname"
                                    class="form-control rounded-0">
                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Day</label>
                                <select name="day" id="" class="form-select rounded-0">
                                    <option>Select day</option>
                                    <?php
                                    for ($day = 1; $day <= 31; $day++) {
                                        echo "<option value='$day'>$day</option>";
                                    }

                                    ?>
                                </select>
                            </div>


                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Month</label>
                                <select name="months" id="" class="form-select rounded-0">
                                    <option> Month</option>
                                    <?php
                                    $months = ["jan", "Feb", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                    foreach ($months as $month) {
                                        echo "<option value='$month'>$month</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Year</label>
                                <select name="years" id="" class="form-select rounded-0">
                                    <option>Year</option>
                                    <?php
                                    $current = date("Y");
                                    for ($year = $current - 50; $year <= $current + 50; $year++) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Gender</label>
                                <select name="gender" id="" class="form-select rounded-0">
                                    <option value="">Select Gender </option>
                                    <option value="">Male </option>
                                    <option value="">Female </option>
                                    <option value="">Other</option>



                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Contact</label>
                                <input type="number" name="contact" placeholder="Eg.999999999"
                                    class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Email</label>
                                <input type="email" name="email" placeholder="Eg.email12@gamil.com"
                                    class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2 col">
                                <label for="" class="small text-muted">Password</label>
                                <input type="password" name="password" placeholder="Eg.password@12"
                                    class="form-control rounded-0">
                            </div>
                        </div>
                        <input type="submit" value="Crate an account" name="create_account"
                            class="btn btn-success w-100 rounded-lg">
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <a href="login.php" class=" fw-bolder">Already have an account</a>

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