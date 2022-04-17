
<div class="container">

    <form class="row g-3" action="http://localhost/MesProjest/MVC/MVCphpJeSouffre/index.php?view=ajouter&action=add" method="post">
        <div class="col-md-6">

            <label for="nomEntreprise" class="form-label">NomEntreprise</label>
            <input type="text" class="form-control" id="nomE" name="nom_entreprise">
        </div>
        <div class="col-md-6">
            <label for="text" class="form-label">NomRepondant</label>
            <input type="text" class="form-control" id="nomR" name="nom_repondant">
        </div>
        <div class="col-12">
            <label for="email" class="form-label">EmailRepondant</label>
            <input type="email" class="form-control" id="email" name="email_repondant">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">NumeroRepondant</label>
            <input type="number" class="form-control" id="inputAddress2"  name="numero_repondant">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">SiegeSocial</label>
            <input type="text" class="form-control" id="inputCity" name="siege_social">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">DateCreation</label>
            <input type="date" class="form-control" id="inputCity" name="date_creation">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">RegistreCommerce</label>
            <input type="text" class="form-control" id="inputCity" name="registre_commerce">
        </div>
<!--        <div class="col-md-6">-->
<!--            <label for="inputCity" class="form-label">NombreEmployer</label>-->
<!--            <input type="number" class="form-control" id="inputCity" name="nbEmployer">-->
<!--        </div>-->
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ninea</label>
            <input type="text" class="form-control" id="inputCity" name="ninea">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Domaine</label>
            <input type="text" class="form-control" id="inputCity" name="domaine">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">PageWeb</label>
            <input type="text" class="form-control" id="inputCity" name="page_web">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select" name="contrat">
                <option selected>Contrat</option>
                <option> oui</option>
                <option> Non</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cotisation</label>
            <input type="text" class="form-control" id="inputCity" name="cotisations">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select" name="organigramme">
                <option selected>Organigramme</option>
                <option> oui</option>
                <option> Non</option>
            </select>
        </div>

        <div class="col-md-6">
            <select id="inputState" class="form-select" name="id_quartier">
<!--                <option selected value="--><?//=$entreprise['id_quartier'] ?><!--">--><?//=$entreprise['libelle']?><!--</option>-->
                <?php
                foreach ($quartier as $q){  ?>
                    <option  value="<?=$q["id"]?>"><?=$q["libelle"]?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <select id="inputState" class="form-select" name="id_statut_juridique">
<!--                <option selected value="--><?//=$entreprise['id_statut_juridique'] ?><!--">--><?//=$entreprise['libelleS']?><!--</option>-->
                <?php
                foreach ($statut_juridique as $s){  ?>
                    <option  value="<?=$s["idS"]?>"><?=$s["libelleS"]?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select" name="id_formation">
<!--                <option selected value="--><?//=$entreprise['id_formation'] ?><!--">--><?//=$entreprise['libelleF']?><!--</option>-->
                <?php
                foreach ($formation as $f){  ?>
                    <option  value="<?=$f["idF"]?>"><?=$f["libelleF"]?></option>
                    <?php
                }
                ?>
            </select>
        </div>



        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
        </div>
    </form>















    <!--    id_quartier-->
    <!--    id_statut_juridique-->
    <!--    id_formation-->
    <!--    id_user-->

