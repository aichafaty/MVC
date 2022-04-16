<?php
require_once '../MVCphpJeSouffre/src/controller/EntrepriseController.php';
//require_once '../MVCphpJeSouffre/src/model/EntrepriseDb.php';

include_once '../MVCphpJeSouffre/src/view/navbar/navbar.php';


$entreprise = new EntrepriseController();



$entreprise->viewManager();




include_once '../MVCphpJeSouffre/src/view/navbar/footer.php';