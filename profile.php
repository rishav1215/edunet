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
    <title></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

    <?php
    include_once "includes/header.php";
    if (isset($_GET['profile_id'])) {
        $profile_id = $_GET['profile_id'];


        $user = getUser($profile_id);


    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <?php
                $cover_image = !empty($user['cover_image']) ? "assets/images/cover/" . htmlspecialchars($user['cover_image']) : null;

                if ($cover_image && file_exists($cover_image)): ?>
                    <div class="cover" style="background-image: url('<?= $cover_image ?>'); background-size:cover;"></div>
                <?php else: ?>
                    <div class="cover"></div>
                <?php endif; ?>

                <div class="d-flex profile-card align-items-center px-5 gap-3 justify-content-between">
                    <span class="d-flex align-items-center gap-4">
                        <div class="card dp-card rounded-circle">
                            <?php
                            if (!isset($_GET['profile_id'])): ?>

                                <form action="actions/upload_dp.php" method="post" enctype="multipart/form-data">
                                    <label for="upload_dp">
                                        <input type="file" onchange="this.form.submit()" name="dp_image" id="upload_dp"
                                            hidden>
                                        <img src="<?= ($user['dp']) ? "assets/images/dp/" . $user['dp'] : "assets/images//dp/profile22.png"; ?>"
                                            alt="" class="card-img-top rounded-circle ">

                                    </label>
                                    <input type="submit" hidden>
                                </form>
                            <?php else: ?>
                                <img src="<?= ($user['dp']) ? "assets/images/dp/" . $user['dp'] : "assets/images//dp/profile22.png"; ?>"
                                    alt="" class="card-img-top rounded-circle ">
                            <?php endif; ?>

                        </div>
                        <h2 class="text-white text-capitalize gap-3 h3 profile-title">
                            <?= $user['firstname'] . " " . $user['lastname']; ?>
                        </h2>
                    </span>
                    <?php
                    if (!isset($_GET['profile_id'])): ?>
                        <form action="actions/upload_cover.php" method="post" enctype="multipart/form-data">
                            <label for="upload_cover" class="btn btn-dark">
                                <input type="file" onchange="this.form.submit()" id="upload_cover" name="cover_image"
                                    hidden>
                                Upload cover
                            </label>
                            <input type="submit" hidden>
                        </form>
                    <?php endif; ?>
                </div>
                <div class="d-flex">
                    <div class="col-6">
                        <table class="table">
                            <tr>
                                <th>Email</th>
                                <td><?= $user['email'];?></td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td><?= $user['contact'];?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?= $user['gender'];?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <td><?= $user['day']. "-".$user['months']. "-" .$user['years'];?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6 gap-3 d-flex flex-column">
                        <?php
                            if(!isset($_GET['profile_id'])):?>
                        
                        <!--insert post from--->
                        <div class="card">
                            <div class="card-body">
                                <form action="actions/insert_post.php" method="post" enctype="multipart/form-data">
                                    <textarea name="content" rows="6" id="" placeholder="What's In Your Mind"
                                        class="w-100 border-0"></textarea>
                                    <div class="d-flex justify-content-between">
                                        <input type="file" name="image">
                                        <input type="submit" value="New Post" name="send_post"
                                            class="btn btn-success btn-sm">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php endif;?>

                        <?Php
                        $user_id = $user['id'];
                        $callingPost = $connect->query("select * from posts JOIN users ON posts.user_id = users.id where users.id = $user_id ORDER BY post_id DESC");
                        while ($post = $callingPost->fetch_array()):
                            ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex gap-2">
                                    <div class="d-flex">
                                        <img src="assets/images/dp/<?= $post['dp'] ?? "profile22.png" ?>" width="45px"
                                            class="rounded-circle object-fit-cover " alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="profile.php?profile_id=<?= $post['user_id']; ?>"
                                            class="nav-link m-0 p-0 fw-medium text-capitalize"><strong>
                                                <?= $post['firstname']; ?>
                                                <?= $post['lastname']; ?>
                                            </strong></a>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                fill="currentColor" class="text-muted" width="10px">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Zm7.75-4.25a.75.75 0 0 0-1.5 0V8c0 .414.336.75.75.75h3.25a.75.75 0 0 0 0-1.5h-2.5v-3.5Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <Span class="small">
                                                <?= date("h: A D M Y", strtotime($post['date_of_post'])); ?>
                                            </Span>

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
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2 pt-4 bg-light h-full" style="position:fixed;right:0;overflow-y:scroll">
                <?php include_once "includes/online_friends.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>