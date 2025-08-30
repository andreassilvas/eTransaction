<?php
$id = "nro_cvv";
$label = "Numero CVV";
$name = "nro_cvv";
$input_value = $_POST['nro_cvv'] ?? '';
$type = "text";
$icon = "public/images/cvv.webp"; // path to your icon
include "includes/base-form-inputs/input_with_image.php";

