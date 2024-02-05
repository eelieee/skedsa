<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>SKEDSA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6,sidebar {font-family: "Georgia", serif}

html, body {
            background-image: url('photo/bg5.png');
        background-size: 100% 100%; /* Make the background image cover the entire viewport */
        background-repeat: repeat;
        
        height: 100vh;
		}

</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo3.png" style="width:65%;" class="w3-circle" align="center"><br><br>
    <h4><b>SKEDSA ADMIN</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-yellow"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT SKEDSA</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a> 
  </div>
  <div class="w3-panel w3-large">
  <p class="w3-text-white"><b>CONTACT US</b></p>
      <a href="https://www.instagram.com/skedsa.uitmck/"><i class="fa fa-envelope fa-fw w3-hover-opacity w3-xxlarge"></a></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<!-- Header -->
  <header id="home">
  <br>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 w3-text-white" style="background-color: #000000;" >
    Seni Kebudayaan Dunia Sarjana (SKEDSA)
  </nav>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <div class="w3-panel w3-border w3-round-xxlarge w3-border-black">
	<br>
    <h2><b>Hello Admin,</b></h2>
    <h3><b>Welcome to Seni Kebudayaan Dunia Sarjana Club</b></h3>
	<br>
	</div>
    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/logo2.png" alt="Me" style="width:50%"></p>
    </div>
    
<!-- Header -->
  <header id="about">
 <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>SKEDSA</b></h4>
    <p>🎭 SKEDSA is not just a club; it's a sanctuary for those who breathe life into their art. Whether you're an experienced performer or a budding talent, SKEDSA welcomes individuals from all walks of life who share a common passion for the stage. Our club is a melting pot of diverse talents, united by the desire to push boundaries and create unforgettable moments.</p>
    <p>🎭 At SKEDSA, we believe in continuous growth and exploration. Our club provides a platform for performers to refine their skills, experiment with new ideas, and collaborate with like-minded individuals. From weekly workshops with industry professionals to exclusive jam sessions and performance opportunities, SKEDSA is your launchpad to elevate your craft to new heights.</p>
	<p>🎭 Immerse yourself in a supportive community that fosters creativity and innovation. SKEDSA encourages members to think outside the box, break traditional barriers, and pave the way for groundbreaking performances. Whether you're a solo artist, part of a band, or a theatrical virtuoso, SKEDSA is where your unique voice can shine.</p>
	<p>🎭 Ready to take center stage? The spotlight is waiting for you at SKEDSA. Let's amplify your talent and make memories that resonate for a lifetime.</p>
	<hr>
    </p>
    <hr>

<!-- Header -->
  <header id="committee">
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2><b>COMMITTEE MEMBERS</b></h2>
<p><h3>Meet the team - our backbones:</h3></p>

<div class="w3-row-padding"><br>


<div class="w3-quarter">
  <img src="photo/ajk10.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>ERISSA LILY</h3>
  <p>CLUB PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk9.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>QISTINA NUR</h3>
  <p>VICE PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk8.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>HASYA HANI</h3>
  <p>SECRETARY</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk7.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>BELLA KHAN</h3>
  <p>TREASURER</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk14.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>JANE SMITH</h3>
  <p>PRESIDENT OF EMCEE DEPARTMENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk5.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>LAYLA YURI</h3>
  <p>PRESIDENT OF MODELLING DEPARTMENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk3.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>FASYA RAYNA</h3>
  <p>PRESIDENT OF DANCE DEPARTMENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>KAIRI ZEN</h3>
  <p>PRESIDENT OF MUSIC DEPARTMENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk2.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>THEO HAZIM</h3>
  <p>PRESIDENT OF THEATER DEPARTMENT</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk13.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>FAEZ RAIDEN</h3>
  <p>SOUND ENGINEER</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk12.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>SAM FAREES</h3>
  <p>STAGE MANAGER</p>
</div>

<div class="w3-quarter">
  <img src="photo/ajk11.jpg" alt="Boss" style="width:45%" class="w3-round w3-hover-opacity">
  <h3>VALLIANT KENT</h3>
  <p>SHOW DIRECTOR</p>
</div>

</div>
</div>

	
<!-- Header -->
  <header id="membership">	
	<p align="center"><h3>Membership form for Seni Kebudayaan Dunia Sarjana Club 2024</h3></p>
    <a href="add_membership.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


   <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Header -->
  <header id="activity">
  
  <title>Seni Kebudayaan Dunia Sarjana (SKEDSA) Activities</title>
</head>

<body>


	<p align="center"><h3>Activities form for Seni Kebudayaan Dunia Sarjana (SKEDSA)</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
     </tbody>
    </table>
  </div>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  
  <!-- Header -->
  <header id="achievement">	
    <p align ="center"><h4><b>Seni Kebudayaan Dunia Sarjana Club Achievements</b></h4></p>
    <!-- Pricing Tables -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">MUSIC</li>
          <li class="w3-padding-16">BEST SOLO FEMALE</li>
          <li class="w3-padding-16">BAND OF THE YEAR</li>
          <li class="w3-padding-16">GOLD ALL SWEEP</li>
          <li class="w3-padding-16">BEST COLLABORATION</li>
          <li class="w3-padding-16">BEST VOCAL</li>
          </li>
        </ul>
      </div>
      
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-khaki w3-xlarge w3-padding-32">DANCE</li>
          <li class="w3-padding-16">BEST CONTEMPORARY DANCE</li>
          <li class="w3-padding-16">PERFORMANCE OF THE YEAR</li>
          <li class="w3-padding-16">EVENT OF THE YEAR</li>
          <li class="w3-padding-16">BEST TRADITIONAL DANCE</li>
          <li class="w3-padding-16">BEST CHOREOGRAPHY</li>
          </li>
        </ul>
      </div>
      
      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">THEATER</li>
          <li class="w3-padding-16">ACTRESS OF THE YEAR</li>
          <li class="w3-padding-16">FANS FAVORITE</li>
          <li class="w3-padding-16">BEST MUSICAL THEATER</li>
          <li class="w3-padding-16">STORYLINE OF THE YEAR</li>
          <li class="w3-padding-16">BEST SCRIPT</li>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header id="contact">
  <!-- Contact Section -->

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Seni Kebudayaan Dunia Sarjana Contacts</title>
</head>

<body>
  

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Contact form for Seni Kebudayaan Dunia Sarjana System (SKEDSA)</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Description</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td>
              <a href="edit_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
