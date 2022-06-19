<?php require APPROOT . '/views/inc/head.php'; ?>




<body class="index-page bg-white">


    <div class="title d-flex justify-content-center flex-column text-center">
        <img src="<?php echo URLROOT; ?>/assets/img/logoR.png" alt="logo" style="width:40px;margin: 0 auto;">
        <h1 class="text-dark"> <small>ESPACE ADMIN<i></small></h1>
    </div>

   

    <section class="login d-flex flex-row justify-content-center align-items-center justify-content-around ">
        <div class="img-login">
            <img src="<?php echo URLROOT; ?>/assets/img/Admin-rafiki.png" class="mt-2" alt="Admin Picture" style="width: 35VW;">
        </div>
        <div class="form-login  px-5 py-5 mr-5  rounded w-50" style="background-color: var(--Rouge);">
            <form method="POST" action="<?php echo URLROOT; ?>/Admins/login" >
            <?php flash('register_success'); ?>
                <h3 class="text-center text-white font-weight-bold mb-3">LOGIN</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Email</label>
                    <input type="email"  name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"class="form-control
                     <?php echo (!empty($data['Email_err'])) ? 'is-invalid' : ''; ?>" 
                      value="<?php if(isset($data['Email'])) { echo $data['Email']; } ?>">
                    <span class=" text-dark"><small><?php if(isset($data['Email_err'])) { echo $data['Email_err']; } ?></small></span>
                    <span id="Email"></span>

                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1" class="text-white">Mot de Passe </label>
                    <input type="password"  name="Password" id="exampleInputPassword1" placeholder="Password"class="form-control 
                    <?php echo (!empty($data['Password_err'])) ? 'is-invalid' : ''; ?>" value="<?php if(isset($data['Email'])) { echo $data['Password']; } ?>">
            <span class=" text-dark"><small><?php if(isset($data['Password_err'])) { echo $data['Password_err']; } ?></small></span>
            <span id="Email"></span>
       
        </div>
                <button type="submit" id="submit" name="submit" class="btn btn-white text-danger mt-3 ">Se Connecter</button>
            </form>
        </div>
    </section>


    <!-- end section table  -->



    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js " type="text/javascript "></script>
    <script src="./assets/js/core/popper.min.js " type="text/javascript "></script>
    <script src="./assets/js/core/bootstrap.min.js " type="text/javascript "></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js "></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js "></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js " type="text/javascript "></script>
    <script src="./assets/js/plugins/moment.min.js "></script>
    <script src="./assets/js/plugins/datetimepicker.js " type="text/javascript "></script>
    <script src="./assets/js/plugins/bootstrap-datepicker.min.js "></script>
    <script src=""></script>



</body>

</html>