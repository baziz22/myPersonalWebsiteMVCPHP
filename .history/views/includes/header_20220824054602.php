<div id="img-logo">
<!-- <a href="index.php"><img id="logo" src="img/logo.svg" alt="logo"></a> -->
    <?php
    if(isset($_SESSION['userUid'])) {
        echo 'userUid';
    }
    ?>
</div>

<div id="text-logo">
    <a href="http://"><img src="<?php URLROOT; ?>public/images/logo/bbinsme.svg" alt=""></a>
    
</div>


<?php require 'views/includes/navigation.php';
?>