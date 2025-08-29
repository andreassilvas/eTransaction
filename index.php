<?php require 'includes/header.php'; ?>

<div class="container py-5 text-left bg-body-tertiary">
    <?php include 'includes/nav.php'; ?>
    <div class="row">
        <div class="col mb-3">
            <div class="mar-left">
                <h5 class="">Expédition</h5>
                <p class="mb-1 mt-3">*Indiquer les renseignements obligatoires</p>
            </div>
            <?php require 'expedition/form.php'; ?>
        </div>
    </div>
</div>
<?php require 'includes/footer.php'; ?>