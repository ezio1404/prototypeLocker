
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand">My Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarDropdown">
        <ul class="navbar-nav">
            <li class="nav-item<?= ($activePage == 'home') ? ' active': ''?>">
                <a href="home.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item<?= ($activePage == 'reserve') ? ' active': ''?>">
                <a href="reserve.php" class="nav-link">Reserve</a>
            </li>
            <li class="nav-item<?= ($activePage == 'locker') ? ' active': ''?>">
                <a href="locker.php" class="nav-link">Locker</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['name']; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledBy="navbarDropDownMenuLink">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>