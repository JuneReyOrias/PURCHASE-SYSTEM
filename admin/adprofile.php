<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed

   
    $page_title = 'Upress | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
?>
<section class="home-dash ms-5 "style="height: 160vh;
    width: 100%;background-color: var(--body-color);
left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>

                  
                </div>
               

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a href="#contact">Admin</a>
        <a href='#contact us'>Hola!</a><br>
        <div class="ser-center fs-2 " >

        <span></span></div> 
</div>
</div>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Admin Joe M</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">onlymejoe</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mmejoe</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">joemader</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">maderaljoe</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Joe Vincent Maderal</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">joemader@gmail.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Putik,Zamboanga City</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>