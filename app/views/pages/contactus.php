
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
                <input type="text " name="Nom"  class="form-control">
            </div>
            <div class="form-group col-md-6 ">
                <label for="prenom ">PRENOM <span class="text-danger"> *</span> :</label>
                <input type="text "  name="Prenom" id="inputPassword4 " class="form-control" >
            </div>
        </div>
        <div class="form-group ">
            <label for="email ">EMAIL <span class="text-danger"> *</span> :</label>
            <input type="email "  name="Email"  id="inputAddress "class="form-control" >
        </div>
        <div class="form-group ">
            <label for="contexte ">CONTEXTE <span class="text-danger"> *</span> :</label>
            <input type="text "  name="Contexte" class="form-control " id="inputAddress "class="form-control">
        </div>
        <div class="form-group ">
            <label for="message ">MESSAGE <span class="text-danger"> *</span> :</label>
            <textarea type="text "  name="Msg"  style="height:140px;" id="inputAddress "  class="form-control">
        </textarea>
        </div>
       
        <button type="submit " name="submit"  class="btn btn-danger ">ENVOYEZ</button>
    </form>
    </section>
    <!-- end form contact us  -->



    <!-- --------------------------footer---------------------------- -->
    <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->
