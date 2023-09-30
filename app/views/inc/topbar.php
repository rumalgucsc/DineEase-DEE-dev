<?php require APPROOT . '/views/inc/header-general.php'; ?>
<nav class="navbar">
    <div class="topbar">
        <div class="logo-item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="<?php echo URLROOT ?>/public/img/login/dineease-logo.svg" alt="DineEase Logo">
            <div class="topbar-title">
                DINE<span>EASE</span>
            </div>
        </div>
        <div class="navbar-content">
            <div class="profile-details">
                <span class="material-symbols-outlined material-symbols-outlined-topbar ">notifications </span>
                Hello, <span class="user-name"> &nbsp;[User]</span>
                <img src="<?php echo URLROOT ?>/public/img/login/profilepic.png" alt="profile-photo" class="profile" />
            </div>
        </div>
    </div>
</nav>
<?php require APPROOT . '/views/inc/footer-general.php'; ?>