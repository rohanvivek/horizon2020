<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    /> -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
      integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Registration Confirmation | Horizon 2020</title>
    <style>
      .text-center {
    text-align: center!important;
}.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}
      .header-bar .site-branding a {
        color: #050505;
        text-decoration: none;
      }
      .site-navigation ul li a {
        color: #050505;
      }
      .site-navigation ul {
        background: #f8f9fa;
      }
      .hamburger-menu span {
        background: #050505;
      }
      .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
      }
      .text-light {
        color: whitesmoke;
      }
      .float-right {
        float: right !important;
      }
      .mb-0,
      .my-0 {
        margin-bottom: 0 !important;
      }

      .h5,
      h5 {
        font-size: 1.25rem;
      }
      .m-0 {
        margin: 0 !important;
      }

      .mt-0,
      .my-0 {
        margin-top: 0 !important;
      }

      .mr-0,
      .mx-0 {
        margin-right: 0 !important;
      }

      .mb-0,
      .my-0 {
        margin-bottom: 0 !important;
      }

      .ml-0,
      .mx-0 {
        margin-left: 0 !important;
      }

      .m-1 {
        margin: 0.25rem !important;
      }

      .mt-1,
      .my-1 {
        margin-top: 0.25rem !important;
      }

      .mr-1,
      .mx-1 {
        margin-right: 0.25rem !important;
      }

      .mb-1,
      .my-1 {
        margin-bottom: 0.25rem !important;
      }

      .ml-1,
      .mx-1 {
        margin-left: 0.25rem !important;
      }

      .m-2 {
        margin: 0.5rem !important;
      }

      .mt-2,
      .my-2 {
        margin-top: 0.5rem !important;
      }

      .mr-2,
      .mx-2 {
        margin-right: 0.5rem !important;
      }

      .mb-2,
      .my-2 {
        margin-bottom: 0.5rem !important;
      }

      .ml-2,
      .mx-2 {
        margin-left: 0.5rem !important;
      }

      .m-3 {
        margin: 1rem !important;
      }

      .mt-3,
      .my-3 {
        margin-top: 1rem !important;
      }

      .mr-3,
      .mx-3 {
        margin-right: 1rem !important;
      }

      .mb-3,
      .my-3 {
        margin-bottom: 1rem !important;
      }

      .ml-3,
      .mx-3 {
        margin-left: 1rem !important;
      }

      .m-4 {
        margin: 1.5rem !important;
      }

      .mt-4,
      .my-4 {
        margin-top: 1.5rem !important;
      }

      .mr-4,
      .mx-4 {
        margin-right: 1.5rem !important;
      }

      .mb-4,
      .my-4 {
        margin-bottom: 1.5rem !important;
      }

      .ml-4,
      .mx-4 {
        margin-left: 1.5rem !important;
      }

      .m-5 {
        margin: 3rem !important;
      }

      .mt-5,
      .my-5 {
        margin-top: 3rem !important;
      }

      .mr-5,
      .mx-5 {
        margin-right: 3rem !important;
      }

      .mb-5,
      .my-5 {
        margin-bottom: 3rem !important;
      }

      .ml-5,
      .mx-5 {
        margin-left: 3rem !important;
      }

      .p-0 {
        padding: 0 !important;
      }

      .pt-0,
      .py-0 {
        padding-top: 0 !important;
      }

      .pr-0,
      .px-0 {
        padding-right: 0 !important;
      }

      .pb-0,
      .py-0 {
        padding-bottom: 0 !important;
      }

      .pl-0,
      .px-0 {
        padding-left: 0 !important;
      }

      .p-1 {
        padding: 0.25rem !important;
      }

      .pt-1,
      .py-1 {
        padding-top: 0.25rem !important;
      }

      .pr-1,
      .px-1 {
        padding-right: 0.25rem !important;
      }

      .pb-1,
      .py-1 {
        padding-bottom: 0.25rem !important;
      }

      .pl-1,
      .px-1 {
        padding-left: 0.25rem !important;
      }

      .p-2 {
        padding: 0.5rem !important;
      }

      .pt-2,
      .py-2 {
        padding-top: 0.5rem !important;
      }

      .pr-2,
      .px-2 {
        padding-right: 0.5rem !important;
      }

      .pb-2,
      .py-2 {
        padding-bottom: 0.5rem !important;
      }

      .pl-2,
      .px-2 {
        padding-left: 0.5rem !important;
      }

      .p-3 {
        padding: 1rem !important;
      }

      .pt-3,
      .py-3 {
        padding-top: 1rem !important;
      }

      .pr-3,
      .px-3 {
        padding-right: 1rem !important;
      }

      .pb-3,
      .py-3 {
        padding-bottom: 1rem !important;
      }

      .pl-3,
      .px-3 {
        padding-left: 1rem !important;
      }

      .p-4 {
        padding: 1.5rem !important;
      }

      .pt-4,
      .py-4 {
        padding-top: 1.5rem !important;
      }

      .pr-4,
      .px-4 {
        padding-right: 1.5rem !important;
      }

      .pb-4,
      .py-4 {
        padding-bottom: 1.5rem !important;
      }

      .pl-4,
      .px-4 {
        padding-left: 1.5rem !important;
      }

      .p-5 {
        padding: 3rem !important;
      }

      .pt-5,
      .py-5 {
        padding-top: 3rem !important;
      }

      .pr-5,
      .px-5 {
        padding-right: 3rem !important;
      }

      .pb-5,
      .py-5 {
        padding-bottom: 3rem !important;
      }

      .pl-5,
      .px-5 {
        padding-left: 3rem !important;
      }
      .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
      }
      .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
      }
      .btn-secondary {
        color: #fff !important;
        background-color: #6c757d !important;
        border-color: #6c757d !important;
      }
      .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
      }
      body{
        margin: 0
      }
    </style>
  </head>
  <body class="bg-light">
    <!-- banner -->
    <div class="banner jarallax">
      <div class="agileinfo-dot">
        <div class="header">
          <div class="container">
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle collapsed"
                  data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="agileits-logo">
                  <h1>
                    <a href="/"
                      ><img src="images/logo1.jpeg" alt="" /> horizon 2020
                    </a>
                  </h1>
                </div>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                class="collapse navbar-collapse nav-wil"
                id="bs-example-navbar-collapse-1"
              >
                <nav>
                  <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#about" class="scroll">Workshop</a></li>
                    <li><a href="/#events" class="scroll">Events</a></li>
                    <li><a href="/#team" class="scroll">Team</a></li>

                    <li><a href="/#mail" class="scroll">Mail Us</a></li>
                    <li class="active">
                      <a href="/register.html">Register</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
        <div class="w3layouts-banner-info">
          <div class="container">
            <h1 class="text-center p-3 text-light display-3">Registration Confirmation</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->
    <div class="container p-3 pt-5">
      <div class="container mt-5 text-dark px-3" style="height: 50vh">
        <?php 
        require_once './db.php';
        if(!isset($_POST['name'])){
            header('location: /register.html');
        }else{
            $p = $_POST;
            $name = $p['name'];
            $email = $p['email'];
            $mobile = $p['mobile'];
            $clg = $p['college'];
            $dept = $p['dept'];
            $roll = $p['clgRoll'];
            $year = $p['year'];
            $tsize = $p['tshirtsize'];
            $events;
            $eventsA;
            $eventsB;
            $eventsC;
            if(isset($p['events'])){
                $events = implode(', ', $p['events']);
            }else{
                $events = '';
            }
            $res = $conn->query("SELECT name FROM participants WHERE email='$email' OR mobile='$mobile'");
            if(isset(mysqli_fetch_assoc($res)['name'])){ ?>
                <div class="mx-3 alert alert-danger text-center mb-4 mt-5" role="alert">
                    <strong>Already registered with this email or phone.</strong> Please try another.
                </div>
                <p class="text-center mt-5">
                    <a href="/register.html" class="btn btn-info mx-auto px-5">Register</a>
                </p>
                <?php
            }else{
                $uid = random_int(100000, 999999);
                $uid = 'HZ20'.$uid;
                $query = 'INSERT INTO participants (name, email, mobile, college, dept, roll, year, tsize, events, horizon_id) '.
                 "VALUES('$name', '$email', $mobile, '$clg', '$dept', $roll, '$year', '$tsize', '$events', '$uid')";
                $res = mysqli_query($conn, $query);
                if($res){ 
                  $msg = '<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
                        <div style="font-size: 1.2rem; font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"">
                        <p>Hi <b>'.$name.'</b>,</p>
                        <p>Greetings from Team Horizon!</p>
                        <p>You have been successfully registerd at BCREC Horizon 2020.</p>
                        <p>Your Horizon ID is <b style="font-size: 1.5rem; margin-left: .5rem;color: #17a2b8">'.$uid.'</b>.</p>
                        <p>Use the Horizon ID to pay registration fee and for future references.</p>
                        <br>
                        <p>Team Horizon,</p>
                        <p>BCREC, Durgapur</p>
                        <p>Follow us on facebook for further updates.</p>
                    </div>';
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: Team Horizon" . "\r\n";
                    $mailed= FALSE;
                  if(mail($email, 'Registration successfull at BCREC Horizon 2020', wordwrap($msg,70), $headers)){
                    $mailed = TRUE;
                  }
                  ?>
                    <div class="container-fluid text-justified mb-4 mt-5" style="font-size: 1rem">
                        <p>Hi <b><?=$name ?></b>,</p>
                        <p>You have been successfully registerd at BCREC HORIZON.</p>
                        <p>Your Horizon ID is <b class="ml-2 text-info" style="font-size: 1.5rem"><?=$uid?></b>.</p>
                        <p>You will recieve an email regarding the registration on the email <b><?=$email?></b>.</p>
                        <p>Use the Horizon ID to pay registration fee and for future references.</p>
                    </div>
                    <p class="text-center mt-5">
                        <a href="/register.html" class="btn btn-info mx-auto px-5">Register Another</a>
                    </p>
                <?php

                }else{ ?>
                    <div class="mx-3 alert alert-danger text-center mb-4 mt-5" role="alert">
                        <strong>Oops! Something went wrong while registering.</strong> Please try again.
                    </div>
                    <p class="text-center mt-5">
                        <a href="/register.html" class="btn btn-info mx-auto px-5">Register</a>
                    </p>
                <?php

                }
                
            }
        }
        ?>
      </div>
    </div>
    <!-- footer -->
    <footer>
      <div class="container py-4">
        <p>
          © BCREC HORIZON 2020 . All Rights Reserved | Designed and Developed by
          <a href="https://www.facebook.com/eviil.lennard"> Chandan Gorai</a>
          and<a href="https://www.linkedin.com/in/shivamkrch"> Shivam Kumar</a>
        </p>
      </div>
    </footer>
    <!-- //footer -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
