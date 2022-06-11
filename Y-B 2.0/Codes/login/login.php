<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/290cce2f00.js" crossorigin="anonymous"></script>
   <!--Google Icons-->
   <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0"
    />
    <!-- own css -->
    <link rel="stylesheet" href="./scss/main.css">


    <title>Login</title>
  </head>
  <body>


  
  <div class="navbar1">
      <ul class="ul">
        <li class="home_nav text-center">
          <a href="#" class="text-white"><span class="material-symbols-rounded text-white house">
              house </span>
          Home</a>
        </li>
        <li class="space_navitems"><a href="#">About</a></li>
        <li class="space_navitems"><a href="#">Disclaimer</a></li>
        <li class="space_navitems"><a href="#">Terms</a></li>
        <li class="space_navitems"><a href="#">Contact</a></li>
      </ul>
    </div>

<div class="container text-center box1">

    <h1 class="heading1" style="margin-top: 3rem; color:#8d14f7; font-weight:bolder; font-family:'Times New Roman', Times, serif; " >Your  BookShelf</h1>
    <div class="container box2">
      <p style="color:#62C0C7; font-weight: bold; font-family:times new roman;">Welcome back, Login to access your Dasboard<br>  <span style="color:#62C0C7; font-weight: bold;">Did you </span> <span style="color:#9219FF; font-weight: bold;">forgot your password ?</span>
   </p>
    </div>

<div class="container form">
  <form action="registration.php" method="post">
  <input type="email" placeholder="E-mail" style="border:none; border-bottom:1px solid grey; width:30%; margin-top:1rem;"><br>
  <input type="password" placeholder="Password"  style="border:none; border-bottom:1px solid grey;  width:30%; margin-top:1.5rem; margin-bottom:2rem;"><br>
  <button class="signup" style="border-radius: 15px; border:2px solid #1ba6b0 ; width:5rem; height:2rem;"><a href="button.html" style="text-decoration: none; color:#1ba6b0; ">Login</a></button>
  </form>
</div>

<div class="container if_already_account">

<p style = "margin-top:1.5rem; color:#9E9999;">Don't have an account ? | <a href="" style="color:#A13FFA;">  Signup </a></p>

</div>
<div class="container " style="display:flex; width:fit-content;">
      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram icons"></i></a>
      </div>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook icons"></i></a>
      </div>
      <div class="social-icons">
        <a href="#"><i class="fab fa-linkedin-in icons"></i></a>
      </div>
    </div>

  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>