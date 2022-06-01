 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
   <!-- start navbar -->
   <?php require APPROOT . '/views/inc/navbar.php'; ?> 
    <!-- end nav -->



    <form class="container shadow p-3 mb-5 bg-body rounded mt-5 ">
        <h3 class=" text-center font-weight-bold mb-5 mt-3">RENDEZ VOUS
        </h3>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="inputEmail4 ">Email</label>
                <input type="email " class="form-control " id="inputEmail4 " placeholder="Email ">
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputPassword4 ">Password</label>
                <input type="password " class="form-control " id="inputPassword4 " placeholder="Password ">
            </div>
        </div>
        <div class="form-group ">
            <label for="inputAddress ">Address</label>
            <input type="text " class="form-control " id="inputAddress " placeholder="1234 Main St ">
        </div>
        <div class="form-group ">
            <label for="inputAddress2 ">Address 2</label>
            <input type="text " class="form-control " id="inputAddress2 " placeholder="Apartment, studio, or floor ">
        </div>
        <div class="form-row ">
            <div class="form-group col-md-6 ">
                <label for="inputCity ">City</label>
                <input type="text " class="form-control " id="inputCity ">
            </div>
            <div class="form-group col-md-4 ">
                <label for="inputState ">State</label>
                <select id="inputState " class="form-control ">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2 ">
                <label for="inputZip ">Zip</label>
                <input type="text " class="form-control " id="inputZip ">
            </div>
        </div>

        <button type="submit " class="btn btn-danger ">Envoyez</button>
    </form>







    <!-- --------------------------footer---------------------------- -->
<?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->