<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="t.css">
    <title>Personal portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $skill1 = $_POST['skill'];
    $skill2 = $_POST['skilll'];
    $skill3 = $_POST['skillll'];
    $id = 0;
    // Directory to store uploaded images
    $uploadDir = "./uploads/";

    // Handle file uploads
    $image1 = uploadFile($_FILES['image'], $uploadDir);
    $image2 = uploadFile($_FILES['image1'], $uploadDir);
    $image3 = uploadFile($_FILES['image2'], $uploadDir);

    $aboutpro1 = $_POST['aboutpro'];
    $aboutpro2 = $_POST['aboutpro1'];
    $aboutpro3 = $_POST['aboutpro2'];
    $linkedin = $_POST['linkedIn'];
    $twitter = $_POST['Twitter'];
    $instagram = $_POST['Instagram'];
    $checkUserQuery = $conn->prepare("SELECT user_id FROM User WHERE name=? AND email=?");
    $checkUserQuery->bind_param("ss", $name, $email);
    $checkUserQuery->execute();
    $userResult = $checkUserQuery->get_result();
    if ($userResult->num_rows > 0) {
        $userData = $userResult->fetch_assoc();
        $user_id = $userData['user_id'];
        // Insert data into User_Data table
        $insertQuery = $conn->prepare("INSERT INTO User_Data (user_Id, name, email, Skill1, Skill2, Skill3, image1, Aboutpro1, image2, Aboutpro2, image3, Aboutpro3) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insertQuery->bind_param("isssssssssss", $user_id, $name, $email, $skill1, $skill2, $skill3, $image1, $aboutpro1, $image2, $aboutpro2, $image3, $aboutpro3);

        if ($insertQuery->execute()) {
            $insert = 1;
        } else {
            echo "Error inserting data: " . $conn->error;
        }
        $insertQuery = $conn->prepare("INSERT INTO Social (user_Id, LinkedIn,Instagram,Twitter) 
    VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("isss", $user_id, $linkedin, $instagram, $twitter);
        if ($insertQuery->execute()) {
            $insert = 1;
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    } else {
        echo "User does not exist in the User table";
    }
}

function uploadFile($file, $uploadDir)
{
    $fileName = basename($file['name']);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if file is an image
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to the specified directory
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            return $targetFilePath; // Return the file path
        } else {
            echo "Error uploading $fileName.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
    return "";
}

$conn->close();
?>

    
    <div>
        <div id="p">
            <img src="picc.jpg" class="center">
            <div id="k">
            <h1><B>I AM</B></h1>
           <h1><?php echo $name; ?></h1> </div>


        <div id="u"><h1><i>I AM AN ARCHITECT DESIGNER</i> </h1><br></div>

   
    </div>
    </div>

<br><br><br><br><br><br><br><br><br><br>

    <div id="f">
        <h2 id="i">MY PROJECTS</h2><br><br>
        <div id="y">

        <img src="<?php echo $image1; ?>" class="pj">
        <p id="lkl"><?php echo $aboutpro1 ?></p>
        <BR><BR>
            
    </div>  
    
    <div id="y2">

        <img src="<?php echo $image2; ?>" class="pj">
        <p id="lkl"><?php echo $aboutpro2 ?></p>
        <BR><BR>
            
    </div>  
    <div id="y3">

        <img src="<?php echo $image3; ?>" class="pj">
        <p id="lkl"><?php echo $aboutpro3 ?></p>
        <BR><BR>
            
    </div>  



<BR><br><br><br>
<br><br><br>


<div id="uy">
<?php
echo "<h1>MY PROFESSIONAL SKILLS</h1>";
echo "<p>$skill1</p>";
if ($skill2 != "") {
    echo "<p>$skill2</p>";
}
if ($skill3 != "") {
    echo "<p>$skill3</p>";
}

?>
</div>

<br><br><br>
<div class="b-example-divider" ></div>
CONNECT TO ME ON:<?php echo $email ?>
<div class="container">
  <footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#p" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="<?php echo $linkedin; ?>" class="nav-link px-2 text-body-secondary">Linked In</a></li>
      <li class="nav-item"><a href="<?php echo $twitter; ?>" class="nav-link px-2 text-body-secondary">Twitter</a></li>
      <li class="nav-item"><a href="<?php echo $instagram; ?>" class="nav-link px-2 text-body-secondary">Instagram</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>

</div>


</body>

</html>