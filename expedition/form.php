<form>
    <div class="row">
        <div class="col-8 pad-left">
            <div class="card mb-4 rounded-0">
                <div class="card-body mt-3">
                    <h6 class="card-title">Coordonnées</h6>
                    <div class="mb-3 col-sm-7">
                        <?php include 'input_email.php'; ?>
                    </div>
                </div>

            </div>
            <div class="card rounded-0">
                <div class="card-body mt-3">
                    <h6 class="card-title">Adresse de livraison</h6>
                    <div class="row">
                        <div class="col">
                            <?php include 'input_prenom.php' ?>
                        </div>
                        <div class="col">
                            <?php include 'input_nomfamille.php' ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php include 'input_telephone.php' ?>
                        </div>
                        <div class="col">
                            <?php include 'input_extention.php' ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <?php include 'input_adresse.php' ?>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-sm-7">
                            <?php include 'input_ville.php' ?>
                        </div>
                        <div class="col-sm">
                            <?php include 'input_province.php' ?>
                        </div>
                        <div class="col-sm">
                            <?php include 'input_codepostal.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pad-right">
            <div class="card rounded-0" style="height: 713.47px">
                <div class="card-body">
                    <?php include 'resume_commande.php' ?>
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-warning rounded-0">Continuer</button>
                    </div>
                    <?php include "includes/base-form-inputs/security_message.php";
                    ?>

                </div>
            </div>
        </div>
    </div>
</form>