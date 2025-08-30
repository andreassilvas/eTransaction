<form>
    <div class="row">
        <div class="col-8 pad-left">
            <div class="card mb-4 rounded-0">
                <div class="card-body">
                    <div class="col-sm-7 d-flex align-items-center">
                        <img src="public/images/redeem_card.webp" alt="Icône carte-cadeau" width="30" height="30"
                            class="me-2">
                        <span>Carte-cadeau</span>
                    </div>
                </div>
            </div>

            <div class="card rounded-0">
                <div class="card-body">
                    <div class="col-sm-7">
                        Carte de credit
                    </div>
                </div>
            </div>
            <div class="card rounded-0">
                <div class="card-body mt-3">
                    <h6 class="card-title">Renseignements sur la carta</h6>

                    <div class="card rounded-0">
                        <div class="card-body mt-3">
                            <div class="mb-3 col-sm-7">
                                <h6 class="card-title">Nouvelle carte</h6>
                                <p class="card-title">Nous acceptons les cartes suivantes.</p>

                                <div class="d-flex gap-3">
                                    <img src="public/images/visa_card.webp" class="img-fluid" alt="Visa"
                                        style="max-width: 30px;">
                                    <img src="public/images/master_card.webp" class="img-fluid" alt="MasterCard"
                                        style="max-width: 30px;">
                                    <img src="public/images/amex_card.webp" class="img-fluid" alt="Amex"
                                        style="max-width: 30px;">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php include 'form-inputs/nro_carte.php' ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php include 'form-inputs/mois_expiration.php' ?>
                                </div>
                                <div class="col-sm-3">
                                    <?php include 'form-inputs/annee_expiration.php' ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php include 'form-inputs/nro_cvv.php' ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pad-right">
            <div class="card rounded-0" style="height: 713.47px">
                <div class="card-body">
                    <?php include 'includes/resume_commande.php' ?>
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