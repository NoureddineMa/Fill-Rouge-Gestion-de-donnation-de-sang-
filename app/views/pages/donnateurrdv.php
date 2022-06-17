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
                <input type="texte" class="form-control "name="Nom_donnateur" id="Nom_donnateurs" placeholder="Veuillez Entrer Votre Nom  ">
                <div id="Nom_error"></div>
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputPassword4 ">PRENOM <span class="text-danger"> *</span> :</label>
                <input type="text" class="form-control " name="Prenom_donnateur" id="Prenom_donnateurs" placeholder="Veuillez Entrer Votre Prenom  ">
                <div id="Prenom_error"></div>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6 ">
            <label for="inputAddress ">ADRESSE <span class="text-danger"> *</span> :</label>
            <input type="text" class="form-control " name="Adresse_donnateur" id="Adresse_donnateurs" placeholder="Veuillez Entrer Votre Adresse  ">
            <div id="Adresse_error"></div>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputAddress ">VILLE <span class="text-danger"> *</span> :</label>
            <input type="text" class="form-control " name="Ville_donnateur" id="Ville_donnateurs" placeholder="Veuillez Entrer Votre Ville  ">
            <div id="Ville_error"></div>
        </div>
</div>
        <div class="form-group ">
            <label for="inputAddress2 ">EMAIL <span class="text-danger"> *</span> :</label>
            <input type="email" class="form-control " name="Email_donnateur" id="Email_donnateurs" placeholder="Veuillez Entrer Votre Mail ">
            <div id="Email_error"></div>
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">NUMERO DE TELEPHONE <span class="text-danger"> *</span> :</label>
            <input type="number" class="form-control " name="Phone_donnateur" id="Num_donnateurs" placeholder="Veuillez Entrer Votre Numero de telephone ">
            <div id="Num_error"></div>
        </div>
            <div class="form-group">
            <label for="sang">NATURE DE SANG <span class="text-danger"> *</span> :</label>
            <select class="form-control" name="Sang_donnateur" required="required">
            <option value="" disabled selected> --- Groupe Sanguin --- </option>
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
            <input type="date" id="Date_donnateurs" name="date_de_naissance_d" class="form-control">
            <div id="Date_error"></div>
        </div>
        
        <button type="submit "name="submit" id="submit_donnateurs" class="btn btn-danger ">Envoyez</button>
    </form>



    <script src="<?php echo URLROOT; ?>/assets/js/formdonnateur.js"></script>
    <!-- --------------------------footer---------------------------- -->
    <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->