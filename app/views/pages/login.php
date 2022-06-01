<?php require APPROOT . '/views/inc/head.php'; ?>


<body class="index-page bg-dark">


    <div class="title d-flex justify-content-center flex-column text-center">
        <img src="<?php echo URLROOT; ?>/assets/img/logoW.png" alt="logo" style="width:40px;margin: 0 auto;">
        <h1 class="text-white"> <small>ESPACE ADMIN<i></small></h1>
    </div>

    <section class="login d-flex flex-row justify-content-center align-items-center justify-content-around ">
        <div class="img-login">
            <img src="<?php echo URLROOT; ?>/assets/img/Admin-rafiki.png" class="mt-2" alt="Admin Picture" style="width: 35VW;">
        </div>
        <div class="form-login  px-5 py-5 mr-5  rounded w-50" style="background-color: var(--Rouge);">
            <form>
                <h3 class="text-center text-white font-weight-bold mb-3">LOGIN</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1" class="text-white">Mot de Passe </label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-white text-danger mt-3 ">Se Connecter</button>
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
</body>

</html>