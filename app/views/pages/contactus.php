
    <!-- include head  -->
    <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->


<body class="index-page">
    <!-- start navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <!-- end nav -->



    <!-- form contact us  -->
        
    <form class="container shadow p-3 mb-5 bg-body rounded mt-5 " action="<?php echo URLROOT; ?>/Messages/Addmsg" method="POST">
        <h3 class=" text-center font-weight-bold mb-5 mt-3">CONTACTEZ NOUS
        </h3>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="nom ">NOM <span class="text-danger"> *</span> :</label>
                <input type="text" name="Nom" id="Nom" class="form-control">
                <div id="Nom_err"></div>
            </div>
            <div class="form-group col-md-6 ">
                <label for="prenom ">PRENOM <span class="text-danger"> *</span> :</label>
                <input type="text"  name="Prenom" id="Prenom" class="form-control" >
                <div id="Prenom_err"></div>

            </div>
        </div>
        <div class="form-group ">
            <label for="email ">EMAIL <span class="text-danger"> *</span> :</label>
            <input type="email"  name="Email"  id="Email"class="form-control" onkeyup="ValidateEmail()" >
            <div id="Email_err"></div>

        </div>
        <div class="form-group ">
            <label for="contexte ">CONTEXTE <span class="text-danger"> *</span> :</label>
            <input type="text"  name="Contexte" id="contexte" class="form-control " id="inputAddress "class="form-control">
            <div id="contexte_err"></div>

        </div>
        <div class="form-group ">
            <label for="message ">MESSAGE <span class="text-danger"> *</span> :</label>
            <input type="text"  name="Msg"   style="height:140px;" id="message"  class="form-control" onkeyup="validatemessage()">
        <div id="message_err"></div>
        </div>
       
        <button type="submit " name="submit" id="submit"  class="btn btn-danger ">ENVOYEZ</button>
    </form>
    </section>
    <!-- end form contact us  -->


    <script src="<?php echo URLROOT; ?>/assets/js/contactus.js"></script>
    <!-- --------------------------footer---------------------------- -->
    <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->
