 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
   <!-- start navbar -->
   <?php require APPROOT . '/views/inc/navbar.php'; ?> 
    <!-- end nav -->



    <form class="container shadow p-3 mb-5 bg-body rounded mt-5 "action="<?php echo URLROOT; ?>/Patients/ajouterpatient" method="POST">
        <h3 class=" text-center font-weight-bold mb-5 mt-3">DEMANDE DE SANG 
        </h3>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="inputEmail4 ">NOM <span class="text-danger"> *</span> :</label>
                <input type="text" name="Nom_patient" class="form-control " id="Nom_patient" placeholder="Veuillez Entrer Votre Nom ">
                <div id="Nom_err_patient"></div>
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputPassword4 ">PRENOM <span class="text-danger"> *</span> :</label>
                <input type="text" name="Prenom_patient" class="form-control " id="Prenom_patient" placeholder="Veuillez Entrer Votre Prenom  ">
                <div id="Prenom_err_patient"></div>
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="inputEmail4 ">ADRESSE <span class="text-danger"> *</span> :</label>
                <input type="text" name="Adresse_patient" class="form-control " id="Adresse_patient" placeholder="Veuillez Entrer Votre Adresse  ">
                <div id="Adresse_err_patient"></div>
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputPassword4 ">VILLE <span class="text-danger"> *</span> :</label>
                <input type="text" name="Ville" class="form-control " id="Ville_patient" placeholder="Veuillez Entrer Votre Ville  ">
                <div id="Ville_err_patient"></div>
            </div>
            
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">EMAIL <span class="text-danger"> *</span> :</label>
            <input type="email" name="Email_patient" class="form-control " id="Email_patient" placeholder="Veuillez Entrer Votre Mail ">
            <div id="Email_err_patient"></div>
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">NUMERO DE TELEPHONE <span class="text-danger"> *</span> :</label>
            <input type="number" name="Phone_patient" class="form-control " id="Num_patient" placeholder="Veuillez Entrer Votre Numero de telephone ">
            <div id="Num_err_patient"></div>
        </div>
            <div class="form-group">
            <label for="inputAddress2 ">NATURE DE SANG <span class="text-danger"> *</span> :</label>
            <select class="form-control " name="Sang_patient" required="required">
              <option value="" disabled selected>--Groupe Sanguin--</option>
              <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="B">B-</option>
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
            <input type="date" id="Date_patient" name="date_de_naissance_p" class="form-control">
            <div id="Date_err_patient"></div>
        </div>
        

        <button type="submit" id="submit_patient" name="submit" class="btn btn-danger ">Envoyez</button>
    </form>


    <script src="<?php echo URLROOT; ?>/assets/js/formpatient.js"></script>
    <!-- --------------------------footer---------------------------- -->
<?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->