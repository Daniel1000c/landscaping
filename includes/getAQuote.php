<?php
    //Custom background img path
    $customBgImg = "images/gardenQuote.jpg";

    //Default background img path
    $defaultBgImg = "images/quoteSectionDefault.jpg";

    //Create if statement to check if customBgImg is set
    $backgroundClass = !empty($customBgImg) ? "bg-custom" : "bg-default";
?>
<section class="get-a-quote <?php echo $backgroundClass ?>">
    <div class="container text-center p-5">
        <h2 class="mb-4">Ready to get started? <span>Call us today!</span></h2>
        <a href="contact.php" class="btn quote-btn">Get in Touch</a>
    </div>
</section>