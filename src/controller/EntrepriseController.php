<?php
require_once 'src/model/EntrepriseDb.php';


class EntrepriseController{

    public function __construct()
    {
       $this->entrepriseDb=new EntrepriseDb();
    }

    public function viewManager()
    {
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view){
            case 'ajouter':
                $entreprise=$this->entrepriseDb->getAll();
                $formation=$this->entrepriseDb->getFormation();
                $statut_juridique=$this->entrepriseDb->getStatut_juridique();
                $quartier=$this->entrepriseDb->getQuartier();

                if (isset($_POST['envoyer'])) {
                    extract($_POST);
                        $this->entrepriseDb->insert($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$ninea,$domaine,$page_web,$contrat,$organigramme,$cotisations);
                    return $this-> liste();


                }
                include 'src/view/entreprise/ajouter.php';
                 break;
//            case 'modififier':
//                $this->includeViewMod();
//
//                break;
            case 'show':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $resultat=$this->entrepriseDb->show($id);
                        if ($resultat){
                           $this->show($id);
                        }
                    }

//                $this->show();
//                include 'src/view/entreprise/show.php';

                break;

                    default:
                $this-> liste();
                break;
        }
        $action= isset($_GET['action']) ? $_GET['action']:Null;
        switch ($action){
            case 'supprimer':
                if ($action=="supprimer"){
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $resultat=$this->entrepriseDb->delete($id);
                        if ($resultat){
                        //header("location:/MesProjest/MVCphpJeSouffre/index.php?view=liste");
                        }
                    }
                }
                break;

//            case 'modification':
//                if (isset($_POST) ) {
//                    extract($_POST);
//                    var_dump($_POST);
////                    die();
//               $this->entrepriseDb->update($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$domaine,$page_web,$contrat,$organigramme,$ninea,$cotisations,$id_quartier,$id_statut_juridique,$id_formation,$id);
////                    include("src/view/entreprise/liste.php");
//                    echo "ok modifier";
//                    die();
//                }
//                break;

        }


    }
    public function includeView($page="liste")
    {
        if ($page != "liste") {
           include 'src/view/entreprise/' . $page . '.php';
        }
    }
    public function liste(){
        $data=new EntrepriseDb();
        $entreprises=$data->getAll();
        include 'src/view/entreprise/liste.php';
    }

    public function show($id){
        $data=new EntrepriseDb();
        $entreprise=$data->show($id);
        include 'src/view/entreprise/show.php';

    }

//    public function includeViewMod(){
//        if (!empty($_GET['id'])){
//            $id=$_GET['id'];
//            $entreprise=$this->entrepriseDb->getEdit($id);
//
//            include 'src/view/entreprise/modififier.php';
//        }
//    }



}
