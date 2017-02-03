<?php
include "../includes/config.php";
include "../partials/admin_nav.php";

$action = isset($_GET['action'])?$_GET['action']:'home';

switch ($action){
    case "home";
        break;

    case "event";
        break;

    case "organisation";
        include "admin_verenigingen.php";
        break;

    case "organisationUpdateForm";
        $id = $_GET['id'];
        include "admin_verenigingenUpdateForm.php";
        break;

    case "organisationUpdate";
        include "admin_verenigingenUpdate.php";
        break;


    case "organisationDelete";
        $id = isset($_GET['id'])?$_GET['id']: 0;
        include "admin_verenigingDelConfirm.php";
        break;

    case "organisationDeleteTrue";
        $id = $_GET['id'];
        include "admin_verenigingDelete.php";
        break;

    case "location";
        include "admin_locaties.php";
        break;

    case "locationUpdateForm";
        $id = $_GET['id'];
        include "admin_locationUpdateForm.php";
        break;

    case "locationUpdate";
        include "admin_locationUpdate.php";
        break;
}
?>


