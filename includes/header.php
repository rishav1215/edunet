<div class="navbar fixed-top navbar-expand-lg bg-light ">
    <div class="container">
        <div class="d-flex ">
            <a href="index.php" class="navbar-brand ">
                <img src="assets/images/logo.png" alt="" class="" width="40">
            </a>
            <form action="" method="get" class="d-flex">

                <input type="search" size="40" placeholder="Search People" class="form-control">
                <button type="submit" class="btn btn-dark">
                    <i class="bi bi-search"></i>
                </button>

            </form>
        </div>
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link">
            <i class="bi bi-house-door"></i>    
            Home</a>
            <a href="profile.php" class="nav-item nav-link fw-bold text-black">
            <i class="bi bi-person-circle text-primary"></i>    
            <?=$user['firstname'];?></a>
            <a href="logout.php" class="nav-item nav-link">
            <i class="bi bi-box-arrow-right"></i>  
            Logout</a>


        </div>
    </div>
</div>