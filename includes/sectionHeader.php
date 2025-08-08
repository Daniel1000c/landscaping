<?php
    //Create section classes array
    $sectionHeaderClasses = [
        "home" => "bg-home",
        "about" => "bg-about",
        "portfolio" => "bg-portfolio",
        "services" => "bg-services",
    ];

    //Create default img class variable
    $defaultBgImg = "bg-default";

    //Determine if customBgImg is set
    $sectionClass = isset($sectionHeaderClasses[$currentPage]) ? $sectionHeaderClasses[$currentPage] : $defaultBgImg;
?>
<section class="section-header py-5 <?php echo $sectionClass ?>">
    <div class="container text-center">
        <h2 class="section-title"><?php echo $section_title?></h2>
    </div>
</section>