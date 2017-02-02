<?php
    include "includes/config.php";
    include "partials/head.php";
    include "partials/nav.php";

    $action = isset($_GET['action'])?$_GET['action']:'home';
    $location = isset($_GET['location'])?$_GET['location']:'location';


    switch ($action){
        case "home";
            include "home.php";
            break;

        case "location";
            include 'locations.php';
            break;
        case "contact";
            include "contact.php";
            break;
        case "agenda";
            include "agenda.php";
            break;
    }

    include "partials/footer.php";