<?php
require_once 'bootstrap.php';
$templateParams["titolo"] = "Homepage";
$templateParams["titoloHeader"] = "Homepage Fornitore";
$templateParams["sottotitoloHeader"] = "";
$templateParams["specificTemplate"] = "template/supplier/supplierTabs.php";
$templateParams["specificNavbar"] = null;
$templateParams["modals"] = array("datiAgg","forniture", "addProduct");
$templateParams["usaGrafici"] = true;
$templateParams["usaTabelle"] = true;
require 'template/base.php';
?>