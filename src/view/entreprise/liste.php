
<div class="container" style="margin-top: 60px">

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NomEntreprise</th>
        <th scope="col">NomRepondant</th>
        <th scope="col">EmailRepondant</th>
        <th scope="col">Numero</th>
        <th scope="col">SiegeSocial</th>
        <th scope="col">DateCreation</th>
        <th scope="col">RegisteCommerce</th>

        <th scope="col">Cotisation</th>

        <th scope="col">Etat</th>

    </tr>
    </thead>
    <tbody>
    <?php
//    require_once 'src/controller/EntrepriseController.php';
        foreach ($entreprises as $entreprise){ ?>

          <tr>
              <td><?= $entreprise['id']?></td>
              <td><?= $entreprise['nom_entreprise']?></td>
              <td><?= $entreprise['nom_repondant']?></td>
              <td><?= $entreprise['email_repondant']?></td>
              <td><?= $entreprise['numero_repondant']?></td>
              <td><?= $entreprise['siege_social']?></td>
              <td><?= $entreprise['date_creation']?></td>
              <td><?= $entreprise['registre_commerce']?></td>
              <td><?= $entreprise['cotisations']?></td>


              <td>

<!--                  <a href="http://localhost/MesProjest/MVCphpJeSouffre/index.php?view=modififier&id=--><?//= $entreprise['id']?><!--" class="btn btn-warning" name="modifier"><i class="bi bi-pencil-square"></i></a>-->
                  <a href="http://localhost/MesProjest/MVC/MVCphpJeSouffre/index.php?action=supprimer&id=<?= $entreprise['id']?>" class="btn btn-danger" name="supprimer" ><i class="bi bi-dash-circle"></i></a>
                  <a href="http://localhost/MesProjest/MVC/MVCphpJeSouffre/index.php?view=show&id=<?= $entreprise['id']?>" class="btn btn-success" name="show"><i class="bi bi-patch-plus"></i></a>

              </td>
          </tr>
    <?php
        }


    ?>


    </tbody>


</table>

</div>