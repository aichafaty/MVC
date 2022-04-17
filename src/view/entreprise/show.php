
<div class="container">
    <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <label for="nomEntreprise" class="form-label" >NomEntreprise:  <?=$entreprise["nom_entreprise"]?></label>

        </div>
        <div class="col-md-6">
            <label for="text" class="form-label">NomRepondant:   <?=$entreprise['nom_repondant']?></label>

        </div>
        <div class="col-6">
            <label for="email" class="form-label">EmailRepondant:  <?=$entreprise['email_repondant']?></label>

        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">NumeroRepondant:  <?=$entreprise['numero_repondant']?></label>

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">SiegeSocial:  <?=$entreprise['siege_social']?></label>

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">DateCreation:  <?=$entreprise['date_creation']?></label>

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">RegistreCommerce:  <?=$entreprise['registre_commerce']?></label>

        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Domaine:  <?=$entreprise['domaine']?></label>

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">PageWeb:   <?=$entreprise['page_web']?></label>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Contrat:    <?=$entreprise['contrat']?></label>


        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Organigramme:  <?=$entreprise['organigramme']?></label>

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ninea:   <?=$entreprise['ninea']?></label>

        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cotisation:  <?=$entreprise['cotisations']?></label>

        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Quartier:  <?=$entreprise['libelle']?></label>
<!--                <option selected value="--><?//=$entreprise['id_quartier'] ?><!--"></option>-->


        </div>
        <div class="col-md-6">

                <label for="inputCity" class="form-label">Statut juridique:  <?=$entreprise['libelleS']?></label>

        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label">Formation:   <?=$entreprise['libelleF']?></label>

        </div>

    </form>
