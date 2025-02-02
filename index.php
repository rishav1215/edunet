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

<div class="container-fluid ">
    <div class="row pt-5 ">
        <div class="col-2 h-full bg-light">
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

        <div class="col-5 pt-4" >
            <!--insert post from--->
            <div class="card">
                <div class="card-body" >
                    <form action="actions/insert_post.php" method="post" enctype="multipart/form-data">
                        <textarea name="content" rows="6" id="" placeholder="What's In Your Mind"
                            class="w-100 border-0"></textarea>
                        <div class="d-flex justify-content-between">
                            <input type="file" name="image">
                            <input type="submit" value="New Post" name="send_post" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>
            </div>
            
            <?Php

            $callingPost = $connect->query("select * from posts JOIN users ON posts.user_id = users.id ORDER BY post_id DESC");
            while ($post = $callingPost->fetch_array()):
                ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex gap-2">
                        <div class="d-flex">
                            <img src="assets/images/dp/<?= $post['dp'] ?? "profile22.png" ?>" width="45px" class="rounded-circle object-fit-cover " alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <a href="profile.php?profile_id=<?= $post['user_id'];?>" class="nav-link m-0 p-0 fw-medium text-capitalize"><strong>
                                    <?= $post['firstname']; ?>
                                    <?= $post['lastname']; ?>
                                </strong></a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="text-muted" width="10px">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Zm7.75-4.25a.75.75 0 0 0-1.5 0V8c0 .414.336.75.75.75h3.25a.75.75 0 0 0 0-1.5h-2.5v-3.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                               <Span class="small"><?= date("h: A D M Y",strtotime($post['date_of_post']));?></Span>

                            </span>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <?php
                    if ($post['content'] != "" || $post['content'] != NULL):
                        echo "<p>" . $post['content'] . "</p>";
                    endif;

                    if ($post['image'] != "" || $post['image'] != NULL):
                        echo "<img src='assets/post_image/" . $post['image'] . "' class='w-100'/>";
                    endif;

                    ?>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span class="text-primary">
                    <i class="bi bi-hand-thumbs-up"></i>    
                    Like</span>
                    <span class="text-primary">
                    <i class="bi bi-chat"></i>    
                    Comment</span>
                    


                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="col-3 pt-3">

            <!-- Banner Ad -->
            <div class="container mt-5">
                <div class="row  ">
                    <div class="col-12 d-flex flex-column ">
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
            <i class="bi bi-0-circle text-success position-fixed"> Active Friends</i>
        </div>



    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>