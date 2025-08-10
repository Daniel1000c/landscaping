<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo((!empty($title)) ? $title : 'Flores Landscaping')?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" version="1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48">
                            <g fill="#FF9800">
                                <rect x="36.1" y="8.1" transform="matrix(.707 .707 -.707 .707 21.201 -25.184)" width="9.9" height="9.9"/>
                                <rect x="36" y="8" width="10" height="10"/>
                            </g>
                            <circle fill="#FFEB3B" cx="41" cy="13" r="3"/>
                            <polygon fill="#2E7D32" points="16.5,18 0,42 33,42"/>
                            <polygon fill="#4CAF50" points="33.6,24 19.2,42 48,42"/>
                        </svg>
                        
                        <span class="logo-text">Flores Terrain</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === "home") ? "active" : "" ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === "about") ? "active" : "" ?>" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More Info
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Testimonials</a></li>
                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                                <li><a class="dropdown-item" href="#">Why Choose Us</a></li>
                                <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === "portfolio") ? "active" : "" ?>" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($currentPage === "services") ? "active" : "" ?>" href="services.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lawn Care & Maintenance</a></li>
                                <li><a class="dropdown-item" href="#">Landscape Design & Installation</a></li>
                                <li><a class="dropdown-item" href="#">Hardscaping</a></li>
                                <li><a class="dropdown-item" href="#">Tree & Shrub Care</a></li>
                                <li><a class="dropdown-item" href="#">Irrigation systems</a></li>
                                <li><a class="dropdown-item" href="#">Seasonal Clean-Up</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === "contact") ? "active" : "" ?>" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>    
        </div> 
    </header>
    <main>