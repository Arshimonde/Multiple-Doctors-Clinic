<?php $active="";?> 
<nav>
    <ul class="list-unstyled">
        <!-- specialites menu item -->
        <?php 
            if(isset($_GET["section"]) && $_GET["section"] == "speciality"):
                $active = "active";
            endif;
        ?>
        <li class="<?php echo $active; ?>">
            <a href="/dashboard.php?section=speciality">
                <i class="fas fa-medkit"></i>
                <p>Spécialités</p>
            </a>
        </li>
        <?php $active = ""; ?>
        <!-- doctors menu item -->
        <?php 
            if(isset($_GET["section"]) && $_GET["section"] == "doctors"):
                $active = "active";
            endif;
        ?>
        <li class="<?php echo $active; ?>">
            <a href="/dashboard.php?section=doctors">
                <i class="fas fa-user-md"></i>
                <p>Docteurs</p>
            </a>
        </li>
        <?php $active = ""; ?>
        <!-- Patients -->
        <?php 
            if(isset($_GET["section"]) && $_GET["section"] == "patients"):
                $active = "active";
            endif;
        ?>
        <li class="<?php echo $active; ?>">
            <a href="/dashboard.php?section=patients">
                <i class="fas fa-tired"></i>
                <p>Patients</p>
            </a>
        </li>
        <?php $active = ""; ?>
    </ul>
</nav>