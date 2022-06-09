    <!-- start navbar -->
    <nav class="navbar  navbar-fixed-top navbar-expand-lg  shadow  bg-body rounded py-1" style="backdrop-filter: blur(1.5rem);">
        <div class="container">
            <a href="<?php echo URLROOT; ?>/pages/index">
            <img src="<?php echo URLROOT; ?>/assets/img/logo.png" alt="le logo" class="logo-navbar">
</a>
            <button class="navbar-toggler " style="color:red;" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:black;"></span>
          </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img src="logo.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pages/index" class="nav-link nav-link-icon  nav-link-hover">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pages/donnateur" class="nav-link nav-link-icon  ml-3 nav-link-hover">Je donne mon sang</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/donnateurs/showDonnateursaccepte" class="nav-link nav-link-icon  ml-3 mr-3 nav-link-hover">Besoin de sang</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pubs/showpubsUser" class="nav-link nav-link-icon  ml-3 nav-link-hover">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pages/contactus" class="nav-link nav-link-icon  ml-2 mr-5 nav-link-hover">Contactez Nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
