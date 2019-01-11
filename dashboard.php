<?php require_once $_SERVER['DOCUMENT_ROOT']."/includes/header.php" ;?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDE BAR START -->
        <div class="dashboard-sidebar col-lg-1 px-0 shadow-lg position-absolute">
            <?php include "includes/dashboard/dashboard-sidebar.php";?>
        </div>
        <!-- SIDE BAR END -->
        
        <!-- MAIN CONTENT START -->
        <?php if(isset($_GET["section"]) && $_GET["section"] == "speciality"):?>
            <?php include "includes/dashboard/dashboard-specialty.php"; ?>
        <?php endif;?>
        <!-- MAIN CONTENT END -->
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/includes/footer.php";?>