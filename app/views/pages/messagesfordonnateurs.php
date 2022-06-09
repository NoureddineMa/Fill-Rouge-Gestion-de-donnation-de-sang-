 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->
    <style>
        *{
            background-color:black;
        }


    </style>

    <section class="messagesdone">


<div class="parent text-center ">
    <div class="image">
        <img src="<?php echo URLROOT; ?>/assets/img/wait.png" class="animate__animated  animate__bounceInDown" style="width: 400px;" alt="Patient enregistré avec succes">
    </div>
    <div class="p-button">
    <p class="text-white font-weight-bold">votre demande pour nous rejoindre est en attente jusqu'a l'acceptation <br> d'un admin merci de votre compréhension ! </p>
                <p class="mb-5 text-white"> <small> Si vous avez d'autres questions N'hesitez pas de
                <a href="#" class="text-danger"> nous contactez</a> </small></p>
                <a href="<?php echo URLROOT; ?>/pages/index" class="btn btn-danger ">Retourner à l'accueil</a>

    </div>
</div>

</section>
<!-- end nav -->





</body>
<!--   Core JS Files   -->
<script src="<?php echo URLROOT; ?>/public/assets/js/core/jquery.min.js " type="text/javascript "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/core/popper.min.js " type="text/javascript "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/core/bootstrap.min.js " type="text/javascript "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/perfect-scrollbar.jquery.min.js "></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/bootstrap-switch.js "></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/nouislider.min.js " type="text/javascript "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/moment.min.js "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/datetimepicker.js " type="text/javascript "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/plugins/bootstrap-datepicker.min.js "></script>
<script src="<?php echo URLROOT; ?>/public/assets/js/main.js "></script>
</body>

</html>