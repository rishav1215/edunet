<?php
include "config/connect.php";

redirectIfNotAuth();

$user = getUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

</html>
<?php
include_once "includes/header.php";
?>

<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-2 h-full bg-light pt-3">
            <div class="nav d-flex flex-column">
                <a href="" class="nav-link nav-item text-black fw-bold mt-3">
                    <i class="bi bi-person-circle text-primary"></i>
                    profile</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-person-check text-primary"></i>
                    Friends</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-people text-primary"></i>
                    metual Friends </a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-ticket-detailed text-primary"></i>
                    presnol details</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-info-circle text-primary"></i>
                    profile Information</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-patch-question text-primary"></i>
                    Help & Support</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-rss text-primary"></i>
                    Feeds</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-calendar2-event text-primary"></i>
                    Event</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-floppy-fill text-primary"></i>
                    Saved</a>
                <a href="" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-gear-wide-connected text-primary"></i>
                    Settings & Privacy</a>
                <a href="login.php" class="nav-link nav-item text-black fw-bold mt-2">
                    <i class="bi bi-box-arrow-right text-primary"></i>
                    Logout</a>

            </div>
        </div>

        <div class="col-5 pt-4">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <textarea name="" rows="6" id="" placeholder="What's In Your Mind"
                            class="w-100 border-0"></textarea>
                        <div class="d-flex justify-content-between">
                            <input type="file" name="" id="">
                            <input type="submit" value="New Post" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>
            </div>
           <div class="card mt-1">
            <div class="card-body">
                <h4>
                <i class="bi bi-person-circle text-primary"></i>    
                imrishav__</h4>
                <p>"i am not a great programmer <br>
            i'm just a good programmer with great habits."</p>
           <h6 class="text-primary fw-bold"> #programmer</h6>
            <img src="assets/images/post.jpg" alt="" class="w-75" width="">
           <div class="p-1">
           <i class="bi bi-hand-thumbs-up p-2 text-primary"> like</i>
           <i class="bi bi-chat-dots p-2 text-primary"> comment</i>
           <i class="bi bi-share p-2 text-primary"> share</i>
           </div>
            </div>
           </div>
        </div>
        <div class="col-3 pt-3">

            <!-- Banner Ad -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            <h4 class="alert-heading">Special Offer!</h4>
                            <p>Get 50% off on all products this weekend! Don't miss out.</p>
                            <hr>
                            <p class="mb-0">Hurry up, offer ends soon!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trigger Button for Modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#adModal">
                Show Ad
            </button>

            <!-- Modal Ad -->
            <div class="modal fade" id="adModal" tabindex="-1" aria-labelledby="adModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adModalLabel">Limited Time Offer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Enjoy 40% off your next purchase! Shop now and save big. Limited time offer, act fast!
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        


        <div class="col-2 pt-4 bg-light h-full">
        <i class="bi bi-0-circle text-success"> Active Friends</i>
        </div>



    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>