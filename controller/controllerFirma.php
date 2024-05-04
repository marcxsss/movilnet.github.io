<?php

require_once 'model/firmaModel.php';

$sign_model = new FirmaModel();
$data_user = $sign_model->getFirmaData($_GET['nrodoc']);

?>