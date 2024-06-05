<?php
session_start();
include ("connect.php");


?>



<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="assets/logo.svg"> <title>BiliTube</title>
    

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global.css">
</head >
<body >
    <header class="container-fluid fixed-top ">

        <nav class="container-fluid d-flex navbar ">

            <div class="logo navbarLeft d-flex align-items-center">
                <i class='bx bx-menu'></i>
                
                <a href="index.php" class="d-flex">
                    <i class='bx bx-movie-play logoIcon'></i>
                    <h4 class="logoTitle"> BiliTube</h4>
                </a>
            </div>

            <div class="searchBar navbarCenter d-none d-md-flex d-lg-flex">
                <form class="header-center d-flex " autocomplete="off">
                
                    <input type="text" name="search_query" placeholder="Search" class="search-input" id="searchbar">
                    <button type="submit" class="search-icon"><i class='bx bx-search' ></i></button>
                </form>
            </div>

            <div class="right-icons navbarRight d-flex">
                <div class="header-right-content d-flex">
                    <a href=""><button type="submit" class="search-icon d-flex d-md-none d-lg-none"><i class='bx bx-search' ></i></button></a>
                    <button id="light-theme-button" class="d-flex"><i class='bx bx-sun '>  </i></button> 
                    <!-- <a href=""><button class="dark-theme"> <i class='bx bxs-moon'></i></button> </a>  -->
                    <a href="uploadvideo.html"><button class="upload d-none d-md-flex d-lg-flex"><i  title="Upload Video" class='bx bx-upload' ></i></button> </a>
                    <a href="watchHistory.html"><button class="watch-history d-none d-md-flex d-lg-flex"><i title="History" class='bx bx-history' ></i></button></a>
                    <a href="watchLater.html"><button class="watch-later d-none d-md-flex d-lg-flex"><i title="Watch Later" class='bx bx-time'></i></button></a>
                    
                    <div class="dropstart dropdown d-flex d-md-none d-lg-none">

                        <button class="  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="uploadvideo.html"><i  title="Upload Video" class='bx bx-upload' onclick="uploadFile()" ></i> Upload Video</a></li>
                          <li><a class="dropdown-item" href="watchHistory.html"><i title="History" class='bx bx-history' ></i>Watch History</a></li>
                          <li><a class="dropdown-item" href="watchLater.html"><i title="Watch Later" class='bx bx-time'></i>Watch Later</a></li>
                        </ul>

                    </div>
                    
                    <button type="button" class="profile d-flex"  data-bs-toggle="modal"  data-bs-target="#modalSignin">
                        <i class='bx bx-user-circle profileIcon'></i><span id="UsernameProfile">Sign In</span>
                    </button>


                </div>
            </div>

        </nav>
    </header>














<!-- Sign In Modal -->  
<div class="modal fade" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h1 class="fw-bold mb-0 fs-2">Log In to BiliTube </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body p-5 pt-0">
          <form id="LogInForm" class="" method="post" action="register.php">
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-3" id="emailLogIn" name="emailLogIn" placeholder="name@example.com">
              <label for="email">Email address</label>

              <small class="text-danger ms-2" id="errorMessageEmailLogIn"> </small>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="passwordLogIn" name="passwordLogIn" placeholder="Password">
              <label for="password">Password</label>

              <small class="text-danger ms-2" id="errorMessagePasswordLogIn"> </small>
            </div>
            
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" id="LogInButton" name="LogInName">Log in</button>
            <small class="text-body-secondary">By clicking Log in, you agree to the terms of use.</small><br>
            <small class="text-body-secondary">Don't have an account?<button type="button" class="modal-signup-button"   data-bs-toggle="modal" data-bs-target="#modalSignup">
                Signup now
                </button>
            </small>
            <hr class="my-4">
            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#google"/></svg>
              Sign up with Google
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
              Sign up with Facebook
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
              Sign up with GitHub
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Sign up Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalSignup">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form class="" method="post" action="register.php" id="SignUpForm">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="emailSignUp" name="emailSignUp" placeholder="name@example.com">
                  <label for="email">Email address</label>

                  <small class="text-danger ms-2" id="errorMessageEmailSignUp"> </small>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3 passwordSignUp" id="passwordSignUp" name="passwordSignUp" placeholder="Password">
                  <label for="password">Password</label>

                  <small class="text-danger ms-2" id="errorMessagePasswordSignUp"> </small>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="usernameSignUp" name="usernameSignUp" placeholder="Username">
                  <label for="username">Username</label>

                  <small class="text-danger ms-2 " id="errorMessageUsernameSignUp"> </small>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" id="SignUpButton" name="SignUpName" disabled>Sign up</button>
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small><br>
                <small class="text-body-secondary">Already have an account?<button type="button" class="modal-login-button" data-bs-toggle="modal" data-bs-target="#modalSignin">
                    Login now
                    </button>
                </small>
                <hr class="my-4">
                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#google"/></svg>
                  Sign up with Google
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
                  Sign up with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
                  Sign up with GitHub
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>


    <script type="text/javascript" src="globaljs.php"></script>
</body>
</html>