<?php require_once 'includes/header.php'; ?>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Gaming</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" >
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1 class="animate__animated animate__rubberBand">Blog de videojuegos</h1>
                            <span class="subheading">Haste nuevos amigos y divierte jugando en una comunidad saná</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-8">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 18, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Science has not yet mastered prophecy</h2>
                            <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on August 24, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Failure is not an option</h2>
                            <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on July 8, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
                <div class="col-md-4">
                    <!-- Signin -->
                    <div class="card my-2">
                        <div class="card-header text-center">
                            Iniciar sesión
                        </div>
                        <div class="card-body">
                        <form id="signin">
                            <input type="text" name="signin-email" id="signin-email" class="form-control my-2" placeholder="Correo electronico">
                            <input type="password" name="signin-pass" id="signin-pass" class="form-control my-2" placeholder="Contraseña">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">Iniciar sesión</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- Sign up -->
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            Crear cuenta
                        </div>
                        <div class="card-body">
                        <form id="signup">
                            <input type="text" name="signupName" id="signupName" class="form-control my-2" placeholder="Nombres">
                            <input type="text" name="signupLastname" id="signupLastname" class="form-control my-2" placeholder="Apellido">
                            <input type="text" name="signupUsernameBlog"  id="signupUsernameBlog"class="form-control my-2" placeholder="Nombre de usuario">
                            <input type="text" name="signupEmail" id="signupEmail" class="form-control my-2" placeholder="Correo electronico">
                            <input type="password" name="signupPass" id="signuPass" class="form-control my-2" placeholder="Contraseña" minlength="8" required>
                            <div id="help-pass">
                                <!-- Message  -->
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once 'includes/footer.php' ?>
        
        <!-- Core theme JS-->
        <script src="assets/js/script.js"></script>
        <!-- Send information to server -->
        <script src="assets/js/index.js"></script>
    </body>
</html>
