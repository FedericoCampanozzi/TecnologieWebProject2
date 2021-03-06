<?php
require_once '../bootstrap.php';
$dbg = false;
if ($dbg) {
    var_dump($_SESSION);
    ?> <br> <br> <?php
    var_dump($_REQUEST);
    ?> <br> <br> <?php
    var_dump($_FILES);
    ?> <br> <br> <?php
}
$codice = $_REQUEST["codiceUpdate"];
switch ($codice) {
    case ("fornitore"):
        if ($dbh->update_fornitore($_SESSION["PIVA_Azienda"],$_REQUEST["via"],$_REQUEST["numero_civico"],$_REQUEST["citta"],$_REQUEST["infoMail"],$_REQUEST["pecMail"],$_REQUEST["fax"],$_REQUEST["tell"])){
            registerSupplier($dbh->get_login_by_id($_SESSION["IdUtente"]));
            show_in_next_page("I dati sono stati aggiornati correttamente", "datiAgg", "homepageSupplier.php", MsgType::Successfull, $dbg);
        }
        else
            show_in_next_page("I dati non sono stati aggiornati", "datiAgg", "homepageSupplier.php", MsgType::Error, $dbg);
        break;
    case ("password"):
        if ($_REQUEST["conf_psw"] == $_REQUEST["new_psw"])
            if($_SESSION["IdUtente"] == $dbh->get_id_utente($_SESSION["usr_un"], $_REQUEST["old_psw"])){
                if ($dbh->update_user_psw($_SESSION["usr_un"], $_REQUEST["new_psw"]))
                    show_in_next_page("La password &egrave; stata aggiornata correttamente", "datiAgg", "userProfilePage.php", MsgType::Successfull, $dbg);
                else
                    show_in_next_page("La password non &egrave; stata aggiornata", "datiAgg", "userProfilePage.php", MsgType::Error, $dbg);
            }else{
                show_in_next_page("La vecchia password non corrisponde con quella inserita", "datiAgg", "userProfilePage.php", MsgType::Error, $dbg);
            }
        else
            show_in_next_page("La password di conferma non corrisponde con la nuova password", "datiAgg", "userProfilePage.php", MsgType::Error, $dbg);
        break;
    case("user_img"):
        list($result, $msg) = uploadImage("../".UPLOAD_USER_DIR, $_FILES["Immagine"]);
        if($result && $dbh->update_image_user($_SESSION["IdUtente"], $msg)) {
            registerUser($dbh->get_login_by_id($_SESSION["IdUtente"]));
            show_ajax_next_page("Immagine aggiornata", "ImgAgg", MsgType::Successfull, $dbg);
        } else {
            show_ajax_next_page("Immagine non aggiornata per il seguente motivo : <br>".$msg, "ImgAgg", MsgType::Warning, $dbg);
        }
        break;
    case ("user"):
        if ($dbh->update_user($_SESSION["IdUtente"], $_REQUEST["username"], $_REQUEST["email"], $_REQUEST["tell"])) {
            registerUser($dbh->get_login_by_id($_SESSION["IdUtente"]));
            show_in_next_page("I dati sono stati aggiornati correttamente", "datiAgg", "userProfilePage.php", MsgType::Successfull, $dbg);
        } else
            show_in_next_page("I dati non sono stati aggiornati", "datiAgg", "userProfilePage.php", MsgType::Error, $dbg);
        break;
    case ("login"):
        if ($dbh->find_user_from_username($_REQUEST["user"])) {
            if ($dbh->find_login($_REQUEST["user"], $_REQUEST["password"])) {
                $login = $dbh->get_login($_REQUEST["user"], $_REQUEST["password"]);
                registerUser($login);
                if (isset($login[0]["PIVA"])) {
                    registerSupplier($login);
                }
                header("Location: ../".$login[0]["Homepage"]);
            } else {
                show_in_next_page("La password per l'utente / mail ".$_REQUEST["user"]." non &egrave; corretta", "pswErr", "index.php", MsgType::Error, $dbg);
            }
        } else {
            show_in_next_page("L'utente / mail ".$_REQUEST["user"]." non &egrave; registrato/a nel sistema", "pswErr", "index.php", MsgType::Error, $dbg);
        }
        break;
    case ("account"):
        if ($dbh->find_user_from_username($_REQUEST["user"])) {
            $newPsw = "";
            $seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()');
            shuffle($seed);
            foreach (array_rand($seed, 10) as $k) $newPsw .= $seed[$k];
            $dbh->update_user_psw($_REQUEST["user"], $newPsw);
            $login = $dbh->get_login($_REQUEST["user"], $newPsw);
            show_in_next_page("Abbiamo cambiato la password per l'utente \"" . $login[0]["Username"] . "\" con e-mail : \"" . $login[0]["EMail"] . "\" in \"" . $newPsw."\"","accRec", "index.php", MsgType::Information, $dbg);
        } else {
            show_in_next_page("L'utente / mail ".$_REQUEST["user"]." non &egrave; registrato/a nel sistema", "usrErr", "recoveryAccountPage.php", MsgType::Error, $dbg);
        }
        break;
    case ("ordine"):
        if ($dbh->update_ordine($_SESSION["IdUtente"], $_REQUEST["id_ordine"]))
            show_in_next_page("Consegna registrata correttamente", "cons", "homepageDeliveryMan.php", MsgType::Successfull, $dbg);
        else
            show_in_next_page("Consegna non registrata correttamente", "cons", "homepageDeliveryMan.php", MsgType::Error, $dbg);
        break;
    case ("denaro"):
        if ($dbh->update_conto($_REQUEST["numero_carta"], 100.0))
            show_in_next_page("Ricarica avvenuta corretamente", "denaro", "userProfilePage.php?showTab=card", MsgType::Successfull, $dbg);
        else
            show_in_next_page("C'&egrave; stato un errore durante la fase di versamento, la ricarica &egrave; stata annullata", "denaro", "userProfilePage.php?showTab=card", MsgType::Error, $dbg);
        break;
    case("notifica"):
        $dbh->update_notica($_REQUEST["idNotifica"]);
        break;
    case("annulla_ordine"):
        show_ajax_next_page("Ordine annullato", "ordAnnullato", MsgType::Information, $dbg);
        break;
    default:
        die("codice inserimento non trovato");
        break;
}