<?php
require_once 'DB.php';

class EntrepriseDb {
    private $dbc;
    private $db;
     public function __construct()
            {
                $dbc=new DB();
                return $this->db=$dbc->getConnexion();
            }
        public function insert($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$ninea,$domaine,$page_web,$contrat,$organigramme,$cotisations)
              {
                    $queryPrepare=$this->db->prepare("INSERT INTO entreprise(nom_entreprise,nom_repondant,email_repondant,numero_repondant,siege_social,date_creation,registre_commerce,ninea,domaine,page_web,contrat,organigramme,cotisations) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)" );
                    $queryPrepare->execute(array($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$ninea,$domaine,$page_web,$contrat,$organigramme,$cotisations));
                    return $queryPrepare;
               }
            public function getEdit($id){
                $query=$this->db->prepare("SELECT * FROM entreprise e,formation f,statut_juridique s,quartier q WHERE e.id_quartier=q.id AND e.id_statut_juridique=s.idS AND e.id_formation=f.idF  AND e.id=".$id);
                $query->execute();
                return $query->fetch();
            }

    public function update($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$ninea,$domaine,$page_web,$contrat,$organigramme,$cotisations,$id_statut_juridique,$id_formation,$id_quartier,$id)
            {
                       $queryPrepare = $this->db->prepare("UPDATE entreprise set nom_entreprise =?, nom_repondant =?, email_repondant =?, numero_repondant =?, siege_social =?, date_creation =?, registre_commerce=?,ninea=?, domaine=?, page_web=?, contrat=?, organigramme=?, cotisations=?,id_statut_juridique=?,id_formation=?,id_quartier=?  where id =".$id);
                        $queryPrepare->execute(array($nom_entreprise,$nom_repondant,$email_repondant,$numero_repondant,$siege_social,$date_creation,$registre_commerce,$ninea,$domaine,$page_web,$contrat,$organigramme,$cotisations,$id_statut_juridique,$id_formation,$id_quartier));
                        var_dump($queryPrepare);
                        die();
                        return $queryPrepare;
            }
    public function delete($id){
        $query=$this->db->prepare("DELETE FROM entreprise WHERE id=:id");
        $query->bindValue(":id",$id);
        return $query->execute();
//        if($query->execute()){
//            return true;
//        }else{
//            return false;
//        }
    }

    public function getAll()
        {
            $query=$this->db->prepare("SELECT * FROM entreprise");
            $query->execute();
            $data= $query->fetchAll();
            return $data;
        }

    public function getFormation()
        {
            $query=$this->db->prepare("SELECT * FROM formation");
            $query->execute();
            $data= $query->fetchAll();
            return $data;
        }
    public function getStatut_juridique()
        {
            $query=$this->db->prepare("SELECT * FROM statut_juridique");
            $query->execute();
            $data= $query->fetchAll();
            return $data;
        }

    public function getQuartier()
        {
            $query=$this->db->prepare("SELECT * FROM quartier");
            $query->execute();
            $data= $query->fetchAll();
            return $data;
        }

        public function show($id){
            $query=$this->db->prepare("SELECT * FROM entreprise WHERE id=$id");

            $query->execute();
            $data= $query->fetchAll();
            return $data;

        }
}