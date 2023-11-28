<!doctype html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="j.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <body>
  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "portfolio_project";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (mysqli_connect_errno()) {
    echo ("Connection failed: " . $conn->connect_error);
  } else {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])) {
      $name = $_POST['username'];
      $mail = $_POST['email'];
      $pass = $_POST['pass']; // Assuming you're storing passwords in plaintext for this example (Not recommended in production)
      $stmt = $conn->prepare("SELECT name, email, password FROM User WHERE name=? AND email=?");
      $stmt->bind_param("ss", $name, $mail);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['password'] == $pass) {
            $login = 1;
          } else {
            echo "Wrong Password";
            header("location: login.html");
          }
        }
      } else {
        echo "User not found";
        // Redirect or handle this case as needed
      }
    } else {
      echo "Incomplete data received";
      // Handle case when required POST data is not set
    }

    // if ($row['password'] == $pass) {
    //   $login = 1;
    // } else {
    //   echo "User not exists"
    //   // header("location: signup.html");
    // }
    // }
    // Ensure no further code is executed after the header redirection
  }

  ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><?php echo "<h1> $name </h1>" ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              
                  </ul>
              </div>
              </div>
            </nav>

            <!-- <div id="showcase">
        <header>
            <nav class="cf">
                <ul class ="cf">
                <li><a href  ="#showcase"> Sports</a></li>
                <li><a href  ="#aboutus"> AboutUs</a></li>
                <li><a href  ="#indoor">Indoor </a></li>
                <li><a href  ="#outdoor">Outdoor</a></li>
                <li><a href  ="#history"> History</a></li>
                
            </ul>
            <a href="#" id="openup">Sports</a>
    
    </nav>
    </header> -->
   
            <div id="j">
              <img src="c.jpg" alt="Girl in a jacket" class="center">
              <div id="centered">
                  <h2>
                      Unlock your potential,<br>One project at a time- </h2><br>
                       <h1>Your Portfolio, Your Story</h1>
           
              </div>

            </div>
      <!-- 
      <div class="card">
        <img src="l.jpg" alt="Avatar"  >
        <div class="container">
          <h4><b>John Doe</b></h4>
          <p>Architect & Engineer</p>
        </div>
      </div> -->


            <div class="content">

      <div>

      <div id="bo">
          <div class="c">
              <div class="p">
                  <img src="a.jpg">
                  <div class="cc">
                    <h3>Portfolio-1</h3>
                    <p>This is one of the types of portfolio</p> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus accusantium, nobis, animi vero consecte</p> 
                      <a href="./back/ph.html" class="btn">Read more</a>
                      <a href="./userdata1.php" class="btn">Use This</a>
                  </div>
              </div>

              <div class="p">
                  <img src="b.jpg">
                  <div class="cc">
                    <h3>Portfolio-2</h3>
                    <p>This is one of the types of portfolio</p> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus accusantium, nobis, animi vero consecte</p> 
                      <a href="./back/kl.html" class="btn">Read more</a>
                      <a href="./userdata2.php" class="btn">Use This</a>
                  </div>
              </div>

              <div class="p">
                  <img src="c.jpg">
                  <div class="cc">
                    <h3>Portfolio-3</h3>
                    <p>This is one of the types of portfolio</p> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus accusantium, nobis, animi vero consecte</p> 
                    <a href="./back/ren.html" class="btn">Read more</a>
                      <a href="./userdata3.php" class="btn">Use This</a>
                  </div>
              </div>

              <div class="p">
                  <img src="hello.jpg">
                  <div class="cc">
                    <h3>Portfolio-4</h3>
                    <p>This is one of the types of portfolio</p> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus accusantium, nobis, animi vero consecte</p> 
                      <a href="./back/template2b.php" class="btn">Read more</a>
                      <a href="./userdata.php" class="btn">Use This</a>
                  </div>
              </div>

          </div>
      </div>
      </div>
      <br><br><br>

      <div class="aligned">
          <div id="r">
            <a > <img src="./Screenshot 2023-11-29 012114.png"  width="300" alt=""></div></a>
         
          <span><b>What does you resume show?</b><br>it does not shows your skills or projects ,
              it shows your days and nights of hardwork,
              it is your
              <br><br>
              <form>
              <a href="./a.html" class="btn">Read more</a>
              <a href="./cvdata.html" class="btn">Use This</a>
              </form>
          </span>
      </div>

      <br><br><br>

      <!-- <footer>
    <p>FOOTER<br>
  <a href="#">Twitter</a></p>
  <a href="#">Instagram</a></p>
  Email :<a href="#"> portfolio@gmail.com</a></p>
</footer> -->


      <div class="b-example-divider" ></div>

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
        </footer>
      </div>

      </div> <!-- this is sabse bada wala div -->


      </body>



      </html>
