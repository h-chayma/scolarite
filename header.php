<?php
// Get the current page URL
$currentURL = $_SERVER['REQUEST_URI'];

// Define menu items and their corresponding URLs
$menuItems = [
    'Home' => '/scolarite/index.php',
    'About' => '/scolarite/about/main.php',
    'Courses' => '/scolarite/course/main.php',
    'Contact' => '/scolarite/contact/main.php',
];

// Check each menu item against the current URL and set the active class
function isCurrentPage($url)
{
    global $currentURL;
    return ($url === $currentURL);
}
?>
<div class="sidebar-info side-info">
    <div class="sidebar-logo-wrapper mb-25">
        <div class="row align-items-center">
            <div class="col-xl-6 col-8">
                <div class="sidebar-logo">
                    <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="logo-img"></a>
                </div>
            </div>
            <div class="col-xl-6 col-4">
                <div class="sidebar-close-wrapper text-end">
                    <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-menu-wrapper fix">
        <div class="mobile-menu"></div>
    </div>
</div>
<div class="offcanvas-overlay"></div>

<header>
    <div class="h2_header-area header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-sm-7 col-6">
                    <div class="h2_header-left">
                        <div class="h2_header-logo">
                            <a href="/scolarite/index.php">
                                <img src="assets/img/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="h2_header-middle">
                        <nav class="h2_main-menu mobile-menu" id="mobile-menu">
                            <ul>
                                <?php foreach ($menuItems as $menuItem => $menuURL) : ?>
                                    <li>
                                        <a href="<?php echo $menuURL; ?>" class="<?php echo isCurrentPage($menuURL) ? 'active' : ''; ?>">
                                            <?php echo $menuItem; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-5 col-6">
                    <div class="h2_header-right">
                        <div class="h2_header-btn d-none d-sm-block">
                            <a href="/scolarite/register/main.php" class="header-btn theme-btn theme-btn-medium">Sign Up</a>
                        </div>
                        <div class="header-menu-bar d-xl-none ml-10">
                            <span class="header-menu-bar-icon side-toggle">
                                <i class="fa-light fa-bars"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .h2_header-middle .h2_main-menu .active {
        color: #0d6efd;
    }
</style>