<form>
    <div class="row">
        <div class="col-8 pad-left">
            <div class="card mb-4 rounded-0">
                <div class="card-body mt-3">
                    <h6 class="card-title">Coordonnées</h6>
                    <div class="mb-3 col-sm-7">
                        <?php
                        $id = "email_adresse";
                        $label = "*Adresse courriel";
                        $type = "email";
                        $describedby = "emailHelp";
                        $input_value = $_POST['email'] ?? '';
                        $describe = "Nous enverrons les mises à jour de commande cette adresse courriel.";
                        include "forms/input_info.php"; ?>
                    </div>
                </div>

            </div>
            <div class="card rounded-0">
                <div class="card-body mt-3">
                    <h6 class="card-title">Adresse de livraison</h6>
                    <div class="row">
                        <div class="col">
                            <?php $id = "prenom";
                            $label = "*Prenom";
                            $name = "prenom";
                            $type = "text";
                            $input_value = $_POST['prenom'] ?? '';
                            include "forms/input.php"; ?>
                        </div>
                        <div class="col">
                            <?php $id = "nomFamille";
                            $label = "*Nom de famille";
                            $name = "nomFamille";
                            $input_value = $input_value = $_POST['nomFamille'] ?? '';
                            $type = "text";
                            include "forms/input.php"; ?>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php
                            $id = "telephone";
                            $label = "*Numéro de téléphone";
                            $name = "telephone";
                            $type = "text";
                            $input_value = $input_value = $_POST['telephone'] ?? '';
                            $describedby = "numHelp";
                            $describe = "Nous vous appellerons uniquement en cas de problèmes avec la commande.";
                            include "forms/input_info.php"; ?>
                        </div>
                        <div class="col">
                            <?php $id = "extFacultatif";
                            $label = "Ext. (facultatif)";
                            $name = "extFacultatif";
                            $input_value = $input_value = $_POST['extFacultatif'] ?? '';
                            $type = "text";
                            include "forms/input.php"; ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <?php $id = "adresse";
                        $label = "*Adresse";
                        $name = "adresse";
                        $input_value = $input_value = $_POST['adresse'] ?? '';
                        $type = "text";
                        include "forms/input.php"; ?>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-sm-7">
                            <?php $id = "ville";
                            $label = "*Ville";
                            $name = "ville";
                            $input_value = $input_value = $_POST['ville'] ?? '';
                            $type = "text";
                            include "forms/input.php"; ?>
                        </div>
                        <div class="col-sm">
                            <?php
                            $id = "province";
                            $name = "province";
                            $label = "*Province";
                            $placeholder = "-sélectionner-";
                            $options = [
                                "1" => "One",
                                "2" => "Two",
                                "3" => "Three",
                                "4" => "Three",
                                "5" => "Three",
                            ];
                            $selected = $_POST['province'] ?? null; // optional preselection
                            include 'forms/input_select.php';
                            ?>
                        </div>
                        <div class="col-sm">
                            <?php $id = "codePostal";
                            $label = "*Code postal";
                            $name = "codePostal";
                            $input_value = $input_value = $_POST['codePostal'] ?? '';
                            $type = "text";
                            include "forms/input.php"; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-4 pad-right">
            <div class="card rounded-0" style="height: 713.47px">
                <div class="card-body">
                    <h5 class="card-title">Résumé de la commande</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total partiel des produits</span>
                            <span>2599.99$</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Frais de livraison estimés</span>
                            <span>Gratuit</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Écofrais</span>
                            <span>0.45$</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Estimation des taxes</span>
                            <span>389.41$</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            <span>Estimation du total</span>
                            <span>2989.85$</span>
                        </li>
                    </ul>
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-warning rounded-0">Continuer</button>

                    </div>
                    <?php include 'forms/security_message.php'; ?>
                </div>
            </div>
        </div>
    </div>
</form>