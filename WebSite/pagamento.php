<?php
require_once 'bootstrap.php';
if(!isUserLoggedIn()) header("Location: index.php");
$templateParams["titolo"] = "Pagamento";
$templateParams["titoloHeader"] = "Pagamento";
$templateParams["sottotitoloHeader"] = null;
$templateParams["specificTemplate"] = "template/user/pagamentoForm.php";
$templateParams["modals"] = array("pag");
$templateParams["usaGrafici"] = false;
$templateParams["usaTabelle"] = true;
require 'template/base.php';
?>