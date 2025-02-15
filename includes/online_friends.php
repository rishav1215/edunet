<div class="list-group list-group-flush">
    <?php
    $user_id = $user['id'];
    $query = $connect->query("select * from users where id !='$user_id'");
    while ($row = $query->fetch_array()):
        ?>

        <a href="profile.php?profile_id=<?= $row['id']; ?>"
            class="list-group-item list-group-item-action bg-transparent online-friends">
            <div class="d-flex gap-2" style="height:50px;">
                <img src="assets/images/dp/<?= $row['dp'] ?? "profile22.png" ?>" class="rounded-circle"
                    style="height:40px; width:40px; alt="">
                        <div class=" d-flex flex-column justify-content-center gap-0">
                <p class="m-0 p-0"><?= $row['firstname'] . " " . $row['lastname']; ?></p>
                <small>online</small>
            </div>
    </div>
<?php endwhile; ?>