 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
    <!-- start navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <!-- end nav -->



    <form class="container shadow p-3 mb-5 bg-body rounded mt-5 " action="<?php echo URLROOT; ?>/donnateurs/ajouterDonnateurs" method="POST">
        <h3 class=" text-center  font-weight-bold mb-5 mt-3">RENDEZ VOUS (DONNATEUR)
        </h3>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="inputEmail4 ">NOM <span class="text-danger"> *</span> :</label>
                <input type="email " class="form-control "name="Nom_donnateur" id="inputEmail4 " placeholder="Veuillez Entrer Votre Nom  ">
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputPassword4 ">PRENOM <span class="text-danger"> *</span> :</label>
                <input type="password " class="form-control " name="Prenom_donnateur" id="inputPassword4 " placeholder="Veuillez Entrer Votre Prenom  ">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6 ">
            <label for="inputAddress ">ADRESSE <span class="text-danger"> *</span> :</label>
            <input type="text " class="form-control " name="Adresse_donnateur" id="inputAddress " placeholder="Veuillez Entrer Votre Adresse  ">
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputAddress ">VILLE <span class="text-danger"> *</span> :</label>
            <input type="text " class="form-control " name="Ville_donnateur" id="inputAddress " placeholder="Veuillez Entrer Votre Adresse  ">
        </div>
</div>
        <div class="form-group ">
            <label for="inputAddress2 ">EMAIL <span class="text-danger"> *</span> :</label>
            <input type="text " class="form-control " name="Email_donnateur" id="inputAddress2 " placeholder="Veuillez Entrer Votre Mail ">
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">NUMERO DE TELEPHONE <span class="text-danger"> *</span> :</label>
            <input type="text " class="form-control " name="Phone_donnateur" id="inputAddress2 " placeholder="Veuillez Entrer Votre Numero de telephone ">
        </div>
            <div class="form-group">
            <label for="inputAddress2 ">NATURE DE SANG <span class="text-danger"> *</span> :</label>
            <select class="form-control " name="Sang_donnateur">
              <option selected>--Groupe Sanguin--</option>
              <option value="0-">O-</option>
            <option value="0+">O+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
            </select>
            </div>
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">DATE DE NAISSANCE <span class="text-danger"> *</span> :</label>
            <input type="date" name="date_de_naissance_d" class="form-control">
        </div>
        

        <button type="submit "name="submit" class="btn btn-danger ">Envoyez</button>
    </form>








    <!-- --------------------------footer---------------------------- -->
    <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->